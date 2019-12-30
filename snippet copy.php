<fieldset>
  <div class="form-group">
    <label for="formofaddress"> Anrede *</label>
    [select* formofaddress id:formofaddress class:form-control "Herr" "Frau"]
  </div>
  <div class="form-group">
    <label for="familyname"> Familienname * </label>
    [text* familyname id:familyname class:form-control placeholder "Familienname"]
  </div>
  <div class="form-group">
    <label for="firstname"> Vorname *</label>
    [text* firstname id:firstname class:form-control placeholder "Vorname"]
  </div>
  <div class="form-group">
    <label for="institution"> Firma oder Institution * </label>
    [text institution id:institution class:form-control placeholder "Firma oder Institution"]
  </div>
  <div class="form-group">
    <label for="email"> E-Mail-Adresse *</label>
    [email* email id:email class:form-control placeholder "E-Mail-Adresse"]
  </div>
  <div class="form-group">
    <label for="email"> Telefonnummer *</label>
    [text* phone id:phone class:form-control placeholder "Telefonnummer"]
  </div>
</fieldset>
<fieldset>
  <div class="form-group">
    <label for="member"> Ich möchte dem Verein zur Förderung der Städtepartnerschaft Aachen-Ningbo e.V. beitreten als: * </label>
    [select* member  class:form-control id:member clas:form-control include_blank "Schüler/in, Student/in oder Auszubildende/r" "Natürliche Person" "Einzelfirma oder Institution" "Jursistische Person, Handelsgesellschaft oder Personenverbund"]
  </div>
<div class="form-group"><h4>Ihre Rechnungsadresse:</h4></div>
  <div class="form-group">
    <label for="name-invoice"> Rechnungsempfänger *</label>
    [text name-invoice id:name-invoice class:form-control placeholder "Rechnungsempfänger"]
  </div>
  <div class="form-group">
    <label for="street"> Straße und Hausnummer *</label>
    [text street id:street class:form-control placeholder "Straße und Hausnummer"]
  </div>
  <div class="form-group">
    <label for="zipcode"> Postleitzahl</label>
    [text zipcode id:zipcode class:form-control placeholder "Postleitzahl"]
  </div>
  <div class="form-group">
    <label for="city"> Stadt</label>
    [text city id:city class:form-control placeholder "Stadt"]
  </div>
  <div class="form-group">
    <label for="message"> Bemerkungen</label>
    [textarea message id:message class:form-control placeholder "Bemerkungen"]
  </div>
  <div class="custom-control custom-checkbox">
    [acceptance acceptance id:datenschutz class:form-check-input] <label for="datenschutz" class="custom-control-label"> Ich bin mit der Verwendung meiner in diesem Formular angegebenen persönlichen Daten zur Bearbeitung meines Mitgliedschaftsantrages einverstanden. </label>
  </div>
  <div class="form-group text-right justify-content-end">
    <span class="d-none tooltip-cnt">Bitte akzeptieren Sie die Datenschutzbestimmungen</span>
    [submit class:btn class:btn-primary class:btn-tooltip "Senden"]
  </div>
</fieldset>
