<?php

namespace App\Livewire\GemTimFis;

use App\Helpers\Helpers;
use Livewire\Component;
use App\Models\TimbreFiscal;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
// use Spatie\LaravelPdf\Facades\Pdf;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Browsershot\Browsershot;


class Index extends Component
{
    public $refresh = false;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public $step1 = false;
    public $step2 = false;
    public $step3 = false;
    public $timbre_1 = false;
    public $timbre_2 = false;
    public $timbre_5 = false;
    public $timbre_10 = false;
    public $timbre_50 = false;
    public $selectTimbre = 0;
    public $cantidad = 0;
    public $timbresGenerated = [];

    public function updatedCantidad()
    {
        
    }

    public function selectedTimbre($timbre)
    {
        switch ($timbre) {
            case 1:
                $this->timbre_1 = true;
                $this->timbre_2 = false;
                $this->timbre_5 = false;
                $this->timbre_10 = false;
                $this->timbre_50 = false;
                $this->selectTimbre = 1;
                break;
            case 2:
                $this->timbre_1 = false;
                $this->timbre_2 = true;
                $this->timbre_5 = false;
                $this->timbre_10 = false;
                $this->timbre_50 = false;
                $this->selectTimbre = 2;
                break;
            case 5:
                $this->timbre_1 = false;
                $this->timbre_2 = false;
                $this->timbre_5 = true;
                $this->timbre_10 = false;
                $this->timbre_50 = false;
                $this->selectTimbre = 5;
                break;
            case 10:
                $this->timbre_1 = false;
                $this->timbre_2 = false;
                $this->timbre_5 = false;
                $this->timbre_10 = true;
                $this->timbre_50 = false;
                $this->selectTimbre = 10;
                break;
            case 50:
                $this->timbre_1 = false;
                $this->timbre_2 = false;
                $this->timbre_5 = false;
                $this->timbre_10 = false;
                $this->timbre_50 = true;
                $this->selectTimbre = 50;
                break;


            default:
                # code...
                break;
        }
    }

    public function checkStep1()
    {
        $this->step1 = true;
    }

    public function checkStep2()
    {
        $this->step2 = true;

    }

    public function checkStep3()
    {

        $this->step3 = true;
        
        $this->generatedMassTimbres($this->cantidad);
            

    }

    public function generatedMassTimbres($cant)
    {

        for ($i=0; $i < $cant*28; $i++) { 

            $date = date('m:s');
            $date = str_replace(':', '', $date);
            $codigo = 'FI-'.Helpers::generarCodigo(7);

            $writer = new PngWriter();

            $qr = QrCode::create('http://'.$_SERVER['HTTP_HOST'].'/api/v1/getTimbre?codigo='.$codigo);

            $qr = $writer->write($qr);

            $qrRoute = '../public/storage/qr_fisico/'.$codigo.'.jpg';

            $qr->saveToFile($qrRoute);

            $timbreFiscal = TimbreFiscal::create([
                'codigo' => $codigo,
                'status' => 'vacio',
                'denominacion_id' => $this->selectTimbre,
                'code_qr' => $qrRoute,
            ]);

            $this->dispatch('$refresh');

            $timbresGenerated[$i] = $codigo;



        }

        // Browsershot::url(route('ReportTimElec'))
        // ->setNodeBinary('/home/kevin/.nvm/versions/node/v18.15.0/bin/node')
        // ->setNpmBinary('/home/kevin/.nvm/versions/node/v18.15.0/bin/npm')
        // ->setBrowserPath('/usr/bin/google-chrome') 
        // ->save('example.pdf');

        // Pdf::view('PrintTimbreElectronico.index')
            
        //     ->save('algunpdf.pdf');
        $denom = $this->selectTimbre;
        $rutaSave = 'timbresFisicos/timbres-'.$date.'.pdf';
        $rutaPdf = 'timbres-'.$date.'.pdf';
        
            $pdf = Pdf::loadView('PrintTimbreElectronico.index', compact('timbresGenerated', 'cant', 'denom'))
            ->save($rutaSave);


            return redirect("descargar/$rutaPdf");




    }

    public function back()
    {
        $this->step1 = false;
        $this->step2 = false;
        $this->step3 = false;
    }

    public function toggle() {
        $this->dispatch('toggle'); 
      }

    public function render()
    {
        return view('livewire.GenTimFis.index');
    }
}
