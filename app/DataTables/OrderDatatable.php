<?php

namespace App\DataTables;

use App\Models\order;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;


class OrderDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'admin.order.datatables_actions')
            ->rawColumns(['delete','action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ParentCategory $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(order $model): QueryBuilder
    {
        return $model->newQuery()->select('id','order_no', 'product_detail', 'totalprice','userid','delivery_status','payment_method','payment_status');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('order-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->parameters(
                config('datatables-buttons.parameters')
            );;
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        $columns = [
            Column::make('id'),
            Column::make('order_no'),
            Column::make('product_detail')->naem('Details'),
            Column::make('totalprice'),
            Column::make('userid'),
            Column::make('delivery_status'),
            Column::make('payment_method')->name('method'),
            Column::make('payment_status')->name('status'),
        ];

        if(Auth::user()->can('order.detail'))
        {
            $columns = array_merge($columns,[Column::make('action')]);
        }


        return $columns;
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Color_' . date('YmdHis');
    }
}
