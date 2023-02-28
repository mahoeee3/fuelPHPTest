<?php

namespace Controller;

use Orm\Relation;

class Contact extends \Controller\Base{
    public function before()
    {
        parent::before();
    }

    public function action_index()
	{

        $contacts = \Model\Contact::query()
        ->related('company')
        ->get();

        $tplData['contacts'] = $contacts;

        $this->template->title = 'Contatos!';
        $this->template->content = \View::forge('contact/index', $tplData);

	}
	public function action_create()
	{
        $companys = \Model\Company::query()
        ->get();

        if (\Input::method() === 'POST') {
            $postData = \Input::post();

            $contact = \Model\Contact::forge($postData);

            if ($contact->save()) {
                \Response::redirect('contact');
                return;
            }
            
            echo 'Erro ao salvar!';
        }

        $this->template->set_global('companys', $companys);
        $this->template->title = 'Novo!';
		$this->template->content = \View::forge('contact/create');
	}
    public function action_delete($id = null)
	{

        is_null($id) && \Response::redirect('contact');

        $contact = \Model\Contact::find($id);

        if (!$contact) {
            \Response::redirect('contact');
        }

        $contact->delete();
        \Response::redirect('contact');

        $this->template->title = 'Deletar!';
	}
    public function action_edit($id = null)
	{
        $companys = \Model\Company::query()
        ->get();

        is_null($id) && \Response::redirect('contact');
        
        $contact = \Model\Contact::find($id);

        if (!$contact) {
            \Response::redirect('contact');
        } 

        if (\Input::method() === 'POST') {
            $postData = \Input::post();

            $contact->set($postData);

            if ($contact->save()) {
                \Response::redirect('contact');
                return;
            }
            
            echo 'Erro ao salvar!';
        }

        $this->template->set_global('contact', $contact);
        $this->template->set_global('companys', $companys);

        $this->template->title = 'Editar!';
		$this->template->content = \View::forge('contact/edit');
	}
}