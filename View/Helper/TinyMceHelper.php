<?php
App::uses('AppHelper', 'View/Helper');

/**
 * Helper for working with TinyMCE editor.
 *
 * @package TinyMce
 * @author segy
 */
class PhpExcelHelper extends AppHelper {
    /**
     * Helpers
     *
     * @var array
     */
    public $helpers = array('Html');

    /**
     * Insert required scripts before view file is rendered
     *
     * @param string $viewFile
     */
    public function beforeRender($viewFile) {
        // js
        $this->Html->script('tinymce/tinymce.gzip', array('inline' => false));

        parent::beforeRender($viewFile);
    }
}