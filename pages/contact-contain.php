<div class="contact-container">
<h2>Me contacter</h2> 
   <form action="traitements/envoi_mail.php" method="post">
   <div id="en-tete">
        <div>
            <label for="prenom">Prénom<span>*</span></label>
            <input type="text" name="prenom" id="prenom" required />
        </div>
        <div>
            <label for="nom">Nom<span>*</span></label>
            <input type="text" name="nom" id="nom" required />
        </div>
   </div>
            <label for="email">E-mail<span>*</span></label>
            <input type="email" name="email" id="email" placeholder="nom@domaine.fr" required />

            <label for="message">Message<span>*</span></label>
            <textarea name="message" id="message" placeholder="Votre message" required="required"></textarea>
            <!-- type de demande -->
            <div class="contact-type">
                <p>Précisez votre demande :</p>
                <div class="contact-item">
                    <input type="radio" id="information" name="contact-type" value="d'information">
                    <label for="information">information</label><br>
                    <input type="radio" id="devis" name="contact-type" value="de devis">
                    <label for="devis">demande de devis</label><br>
                    <input type="radio" id="reclamation" name="contact-type" value="de réclamation">
                    <label for="reclamation">réclamation</label> 
                </div>
                
            </div>
            
            <!-- bouton envoyer -->
            <input id="send-btn" type="submit" value="Envoyer" /><br>
        </form>
</div>
