<?php
    include_once("./includes.php");
    entete("Profil");
    verif_connexion();
?> 
  
    <div class="container">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Information</a></li>
                <li><a href="#tab2" data-toggle="tab">Avatar</a></li>
            </ul>

            <div class="tab-content">
                <!---- INFORMATION ----->
                <div class="tab-pane active" id="tab1">
                    <form class="well form-horizontal" method="post" action="updateProfil.php">
                        <fieldset>
                            <?php
                                echo"<input type='hidden' id='session' name='session' value='".$_SESSION['idUtil']."'>";
                            ?>
                            <div class="control-group">
                                <label class="control-label" for="input01"><b>Pseudo</b></label>
                                <div class="controls">
                                    <?php
                                        $util_connexion=query("SELECT * FROM utilisateur WHERE idUtil='".$_SESSION['idUtil']."'");
                                        $util=mysql_fetch_array($util_connexion);
                                        echo"<input type='text' class='input-medium' id='pseudo' name='pseudo' value='".$util[1]."'disabled>";  
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input02"><b>E-mail</b></label>
                                <div class="controls">
                                    <?php
                                        echo"<input type='email' class='input-medium' id='mail' name='mail' value='".$util[3]."'>";  
                                    ?>
                                </div>
                            </div> 
                            <div class="control-group">
                                <label class="control-label"><b>Mot&nbsp;de&nbsp;passe&nbsp;actuel&nbsp;:*</b></label>   
                                <div class="controls">
                                    <input type="password" class="input-xlarge" id="mdpactuel" name="mdpactuel" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><b>Nouveau&nbsp;mot&nbsp;passe&nbsp;:*</b></label>
                                <div class="controls">
                                    <input type="password" class="input-xlarge" id="mdp1" name="mdp1" value="">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><b>Confirmation&nbsp;:*</b></label>
                                <div class="controls">
                                    <input type="password" class="input-xlarge" id="mdp2" name="mdp2" value="">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                
                <!---- AVATAR ----->
                <div class="tab-pane" id="tab2">
                    <form class="well form-horizontal">
                        <div class="control-group">
                            <label class="control-label"><b>Image&nbsp;actuelle</b></label>
                            <div class="controls">
                                <ul class="thumbnails">
                                    <li class="span3">
                                        <a href="#" class="thumbnail">
                                            <img src="http://fc03.deviantart.net/fs71/f/2011/098/f/e/trollface_wallpaper_by_juliothechange-d3dhjlw.jpg" alt="">
                                        </a>
                                    </li>   
                                </ul>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="Upluaderimg"><b>Upluader&nbsp;un&nbsp;Fichier</b></label>
                            <div class="controls">
                                <input class="input-file" id="fileInputimage" type="file">                                    
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
<?php
    pied();
?> 