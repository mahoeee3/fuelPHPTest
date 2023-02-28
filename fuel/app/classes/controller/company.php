<?php

namespace Controller;

class Company extends \Controller\Base{
    public function before()
    {
        parent::before();
    }

    public function action_index()
	{

        $companys = \Model\Company::query()
        ->related('contacts')
        ->get();

        $tplData['companys'] = $companys;

        $this->template->title = 'Empresas';
        $this->template->content = \View::forge('company/index', $tplData);

	}
	public function action_create()
	{
        if (\Input::method() === 'POST') {
            $postData = \Input::post();

            $company = \Model\Company::forge($postData);

            if ($company->save()) {
                \Response::redirect('company');
                return;
            }
            
            echo 'Erro ao salvar!';
        }

        $this->template->title = 'Novo!';
		$this->template->content = \View::forge('company/create');
	}
    public function action_delete($id = null)
	{

        is_null($id) && \Response::redirect('company');

        $company = \Model\Company::find($id);

        if (!$company) {
            \Response::redirect('company');
        }

        $company->delete();
        \Response::redirect('company');

        $this->template->title = 'Deletar!';
	}
    public function action_edit($id = null)
	{

        is_null($id) && \Response::redirect('company');
        
        $company = \Model\Company::find($id);

        if (!$company) {
            \Response::redirect('company');
        } 

        if (\Input::method() === 'POST') {
            $postData = \Input::post();

            $company->set($postData);

            if ($company->save()) {
                \Response::redirect('company');
                return;
            }
            
            echo 'Erro ao salvar!';
        }

        $this->template->set_global('company', $company);

        $this->template->title = 'Editar!';
		$this->template->content = \View::forge('company/edit');
	}
}