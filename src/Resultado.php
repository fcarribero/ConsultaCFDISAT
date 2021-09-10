<?php

namespace Webneex\ConsultaCFDISAT;

class Resultado {

    public $CodigoEstatus;
    public $EsCancelable;
    public $Estado;
    public $EstatusCancelacion;
    public $ValidacionEFOS;

    /**
     * @return bool
     */
    public function isVigente() {
        return $this->Estado === 'Vigente';
    }

    /**
     * @return bool
     */
    public function isCancelable() {
        return in_array($this->EsCancelable, ['Cancelable con aceptación', 'Cancelable sin aceptación']);
    }
}