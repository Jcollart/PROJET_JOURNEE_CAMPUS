<?php
    require './Connexion.php';
    require './QuestController.php';

    function utf8ize($d) {
        if (is_array($d)) {
            foreach ($d as $k => $v) {
                $d[$k] = utf8ize($v);
            }
        } else if (is_string ($d)) {
            return utf8_encode($d);
        }
        return $d;
    }

    if (isset($_POST['SUBMIT_CODE']))
    {
        $bdd = new Connexion();
        $co = $bdd->openConnexion();

        $sql = ('
            SELECT q.*, r.reponse, r.valid
            FROM question as q, reponse as r, appartenir as ap, avoir, qcm 
            WHERE q.code = :id
            AND q.id = ap.id_question 
            AND r.id = ap.id 
            AND avoir.id = q.id
            AND avoir.id_qcm = qcm.id');

        $req = $co->prepare($sql);
        $req->execute([
            'id' => (string)$_POST['CODE']
        ]);
        $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
        //$resultat = json_encode($resultat);
        //$resultat = json_decode($resultat);

        echo json_encode(utf8ize($resultat));

        //echo $resultat;
    }
?>