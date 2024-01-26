<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class FormActions extends AbstractAction {
    public function getTitle() {
        return 'Approve';
    }

    public function getIcon() {
        return 'voyager-check';
    }

    public function getPolicy() {
        return 'edit';
    }

    public function getAttributes() {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
        ];
    }

    public function getDefaultRoute() {
        return route( 'forms.approve', $this->data->id );
    }

    public function shouldActionDisplayOnDataType() {
        return $this->dataType->slug == 'forms';
    }

    public function shouldActionDisplayOnRow( $row ) {
        return $row->approved != "YES";
    }
}
