<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
        <ul class="nav nav-tabs">
        <li><a href="./listeMembre.php">Listes</a></li>
        <li><a href="./addMembre.php">Ajouter un membre</a></li>
        <li><a href="./editMembre.php">Modifier un membre</a></li>
        </ul> 
      <div class="row">          
        <div class="span12">
            <h3>Modifier un membre</h3><br/>
            <div id="form_container">
                <div class="tab-pane active" id="tab1">
                <form class="well form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="select01"><b>Numéro du membre</b></label>
                            <div class="controls">
                            <select id="select01">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            </div>
                        </div>                         
                        <div class="control-group">
                            <label class="control-label" for="input01"><b>Pseudo</b></label>
                            <div class="controls">
                                <input type="text" class="input-medium" id="input01" value="Tom">  
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input02"><b>E-mail</b></label>
                            <div class="controls">
                                <input type="email" class="input-medium" id="input01" value="Tom@Hundred.Miles">  
                            </div>
                        </div> 
                        <div class="control-group">
                            <label class="control-label" for="select01"><b>Changer son droit</b></label>
                            <div class="controls">
                            <select id="select01">
                                <option>Utilisateur</option>
                                <option>Modérateur</option>
                                <option>Administrateur</option>
                            </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><b>Mot&nbsp;de&nbsp;passe&nbsp;:*</b></label>   
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="inputtactuel" value="" type="text">
                            </div>
                        </div>
                        <div class="control-group">                                                       
                            <label class="control-label"><b>Confirmation:*</b></label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="inputtnouveau2" value="" type="text">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <boutton type="reset" class="btn btn-warning">Annuler</boutton>
                        </div>
                    </fieldset>
                </form>
                </div>	
            </div>
<?php
    pied();
?>           