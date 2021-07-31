<?php

namespace App\Http\Controllers\Enterprises;

use App\DataTables\EnterpriseDataTable;
use App\Http\Requests\Settings\Enterprises\EnterpriseIndexRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

/**
 * Class EnterpriseIndexController.
 *
 * @package App\Http\Controllers\Enterprises
 */
class EnterpriseIndexController extends EnterpriseController
{
    /**
     * @var string
     */
    private string $pageTitle = 'Lista de Empresas';

    /**
     * @var EnterpriseDataTable
     */
    private EnterpriseDataTable $enterpriseDataTable;

    /**
     * EnterpriseIndexController constructor.
     *
     * @param  EnterpriseDataTable  $enterpriseDataTable
     */
    public function __construct(EnterpriseDataTable $enterpriseDataTable)
    {
        $this->enterpriseDataTable = $enterpriseDataTable;
    }

    /**
     * Handle the incoming request.
     *
     * @param  EnterpriseIndexRequest  $enterpriseIndexRequest
     *
     * @return View|JsonResponse
     */
    public function __invoke(EnterpriseIndexRequest $enterpriseIndexRequest): View|JsonResponse
    {
        $this->setPageTitle($this->pageTitle);
        $this->setBreadcrumbs(['name' =>$this->pageTitle]);

        return $this->enterpriseDataTable->render('pages.enterprises.index');
    }
}
