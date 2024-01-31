<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridColumns;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class UsersTable extends PowerGridComponent
{
    use WithExport;

    public $refresh = false;

    protected $listeners = ['registroCreado' => '$refresh'];

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return User::query()->orderBy('id', 'desc');
        return User::with('Role');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('id')
            ->addColumn('name')

           /** Example of custom column using a closure **/
            ->addColumn('name_lower', fn (User $model) => strtolower(e($model->name)))

            ->addColumn('email')
            ->addColumn('Role.rol');
            }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),

            Column::make('Rol', 'Role.rol'),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
            Filter::inputText('name')->operators(['contains']),
            Filter::inputText('email')->operators(['contains']),
            Filter::datetimepicker('created_at'),
        ];
    }


    public function actions(\App\Models\User $row): array
    {
        return [
            Button::add('edit')
            ->slot('<i class="bi bi-pencil-square"></i> Editar')
            ->id()
            ->class('pg-btn-white text-xl font-bold dark:pg-btn-yellow dark:ring-yellow-400 dark:border-yellow-400 dark:hover:bg-yellow-600 dark:ring-offset-yellow-700 dark:text-white dark:bg-yellow-400 pg-btn-yellow ring-yellow-400 border-yellow-400 hover:bg-yellow-600 ring-offset-yellow-700 text-white bg-yellow-400')
            ->openModal('Users.EditUser', ['rowId' => $row->id]),

            Button::add('delete')
            ->slot('<i class="bi bi-trash"></i> Eliminar')
            ->id()
            ->class('pg-btn-white text-xl font-bold dark:pg-btn-red dark:ring-red-600 dark:border-red-600 dark:hover:bg-red-600 dark:ring-offset-red-700 dark:text-white dark:bg-red-600 pg-btn-red ring-red-600 border-red-600 hover:bg-red-600 ring-offset-red-700 text-white bg-red-600')
            ->openModal('Users.DeleteUser', ['rowId' => $row->id])
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
