<?php

namespace App\DataTables;

use App\Models\Enterprise;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

/**
 * Class EnterpriseDataTable.
 *
 * @package App\DataTables
 */
class EnterpriseDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'pages.settings.enterprises.datatable-action')
            ->editColumn('logo', 'pages.settings.enterprises.datatable-logo')
            ->editColumn('active', 'pages.settings.enterprises.datatable-active')
            ->editColumn('created_at', function (Enterprise $enterprise) {
                return $enterprise->created_at;
            })
            ->rawColumns(['logo', 'action', 'active']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param  Enterprise  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Enterprise $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('enterprise-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(4)
            ->buttons(
                Button::make('create'),
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->hidden(),
            Column::make('logo')
                ->addClass('center')
                ->orderable(false),
            Column::make('name')->title('Nome'),
            Column::make('active')->title('Ativo'),
            Column::make('created_at')->title('Data de Criação'),
            Column::computed('action')->title('Ações')
                ->orderable(false)
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Enterprise_'.date('YmdHis');
    }
}
