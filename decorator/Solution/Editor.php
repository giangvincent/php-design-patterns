<?php
require_once "Artefact.php";

class Editor {
    public function openProject(String $path) {
        $artefacts = [
            new Artefact("Main"),
            new Artefact("Demo"),
            new Artefact("EmailClient"),
            new Artefact("EmailProvider"),
        ];

        $artefacts[0]->setMain(true);
        $artefacts[2]->setHasError(true);

        foreach ($artefacts as $artefact)
            echo $artefact->render();
    }
}