<?php

	function Alert($msg,$type){
		$alert = '<div class="alert alert-dismissible alert-'.$type.'">
		  <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
		  '.$msg.'</div>';
		echo "<div class='row'><br><div class='col-md-12'><div class='col-md-4 col-md-offset-3'>".$alert."</div></div></div>";
	}

	  function msg($key,$lang){
        $translater = array(
            "success" => array(
                        "en" => "successful operation",
                        "fr" => "opération réussie",
                        "ar" => "عملية ناجحة",
                        "al" => "erfolgreichen Betrieb",
                        "ch" => "手术成功",
                        "es" => "operación exitosa",
                        "it" => "operazione riuscita",
                        "tu" => "başarılı operasyon",
                        "hi" => "सफल आपरेशन",
            ),
        );

        if(!empty($translater[$key][$lang])){
             Alert($translater[$key][$lang],$key);
        }

    }