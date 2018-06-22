<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
<?php 
 
    /*
     * 1.- Creamos la variable que contiene el archivo que tenemos que crear.
     * 2.- preguntamos si existe el archivo, si el archivo existe "se ha modificado"
       en caso contrario el archivo se ha creado.
     * 3.- Con fopen abrimos un archivo o url, en este caso vamos a abrir un archivo
       pasando como parámetro la variable $nombre_archivo que es la que contiene 
       nuestro archivo y como segundo parámetro como lo vamos a abrir, en este caso "a"
       que nos abre el fichero en solo lectura y sitúa el puntero al final del fichero
       y en el caso de que no exista lo crea.
 
       ******Para terminar*******
 
       4.-Con el fwrite escribimos dentro del archivo la fecha con la hora de Creación 
       o modificación, según el caso, con la variable $mensaje, 
 
    */
     
    $nombre_archivo = "12371768402-03-B005-00000007.xml"; 
	$mensaje = "<?xml version='1.0' encoding='UTF-8' ?> 
 <Invoice xmlns='urn:oasis:names:specification:ubl:schema:xsd:Invoice-2' xmlns:cac='urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2' xmlns:cbc='urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2' xmlns:ccts='urn:un:unece:uncefact:documentation:2' xmlns:ds='http://www.w3.org/2000/09/xmldsig#' xmlns:ext='urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2' xmlns:qdt='urn:oasis:names:specification:ubl:schema:xsd:QualifiedDatatypes-2' xmlns:sac='urn:sunat:names:specification:ubl:peru:schema:xsd:SunatAggregateComponents-1' xmlns:schemaLocation='urn:oasis:names:specification:ubl:schema:xsd:Invoice-2 ..\xsd\maindoc\UBLPE-Invoice-1.0.xsd' xmlns:udt='urn:un:unece:uncefact:data:specification:UnqualifiedDataTypesSchemaModule:2'>
 <ext:UBLExtensions>
 <ext:UBLExtension>
 <ext:ExtensionContent>
 <sac:AdditionalInformation>
 <sac:AdditionalMonetaryTotal>
  <cbc:ID>2005</cbc:ID> 
  <cbc:PayableAmount currencyID='PEN'>105.93</cbc:PayableAmount> 
  </sac:AdditionalMonetaryTotal>
 <sac:AdditionalMonetaryTotal>
  <cbc:ID>1001</cbc:ID> 
  <cbc:PayableAmount currencyID='PEN'>2012.71</cbc:PayableAmount> 
  </sac:AdditionalMonetaryTotal>
 <sac:AdditionalMonetaryTotal>
  <cbc:ID>1002</cbc:ID> 
  <cbc:PayableAmount currencyID='PEN'>0.00</cbc:PayableAmount> 
  </sac:AdditionalMonetaryTotal>
 <sac:AdditionalMonetaryTotal>
  <cbc:ID>1003</cbc:ID> 
  <cbc:PayableAmount currencyID='PEN'>0.00</cbc:PayableAmount> 
  </sac:AdditionalMonetaryTotal>
 <sac:SUNATTransaction>
  <cbc:ID>01</cbc:ID> 
  </sac:SUNATTransaction>
  </sac:AdditionalInformation>
  </ext:ExtensionContent>
  </ext:UBLExtension>
  </ext:UBLExtensions>
  <cbc:UBLVersionID>2.0</cbc:UBLVersionID> 
  <cbc:CustomizationID>1.0</cbc:CustomizationID> 
  <cbc:ID>B005-00000007</cbc:ID> 
  <cbc:IssueDate>2016-10-31</cbc:IssueDate> 
  <cbc:InvoiceTypeCode>03</cbc:InvoiceTypeCode> 
  <cbc:DocumentCurrencyCode>PEN</cbc:DocumentCurrencyCode> 
 <cac:Signature>
  <cbc:ID>12371768402</cbc:ID> 
  <cbc:Note>Elaborado por Sistema de Emision Electronica Facturador SUNAT (SEE-SFS) 1.0.5</cbc:Note> 
  <cbc:ValidatorID>213873</cbc:ValidatorID> 
 <cac:SignatoryParty>
 <cac:PartyIdentification>
  <cbc:ID>12371768402</cbc:ID> 
  </cac:PartyIdentification>
 <cac:PartyName>
  <cbc:Name>prueba S.A.</cbc:Name> 
  </cac:PartyName>
 <cac:AgentParty>
 <cac:PartyIdentification>
  <cbc:ID>12371768402</cbc:ID> 
  </cac:PartyIdentification>
 <cac:PartyName>
  <cbc:Name>prueba S.A.</cbc:Name> 
  </cac:PartyName>
 <cac:PartyLegalEntity>
  <cbc:RegistrationName>prueba S.A.</cbc:RegistrationName> 
  </cac:PartyLegalEntity>
  </cac:AgentParty>
  </cac:SignatoryParty>
 <cac:DigitalSignatureAttachment>
 <cac:ExternalReference>
  <cbc:URI>SIGN</cbc:URI> 
  </cac:ExternalReference>
  </cac:DigitalSignatureAttachment>
  </cac:Signature>
 <cac:AccountingSupplierParty>
  <cbc:CustomerAssignedAccountID>12371768402</cbc:CustomerAssignedAccountID> 
 <cbc:AdditionalAccountID>6</cbc:AdditionalAccountID> 
 <cac:Party>
 <cac:PartyName>
  <cbc:Name>prueba S.A.</cbc:Name> 
  </cac:PartyName>
 <cac:PostalAddress>
  <cbc:ID>210101</cbc:ID> 
  <cbc:StreetName>Arequipa</cbc:StreetName> 
 <cac:Country>
  <cbc:IdentificationCode>PER</cbc:IdentificationCode> 
  </cac:Country>
  </cac:PostalAddress>
 <cac:PartyLegalEntity>
  <cbc:RegistrationName>prueba S.A.</cbc:RegistrationName> 
  </cac:PartyLegalEntity>
  </cac:Party>
  </cac:AccountingSupplierParty>
 <cac:AccountingCustomerParty>
  <cbc:CustomerAssignedAccountID>71768402</cbc:CustomerAssignedAccountID> 
  <cbc:AdditionalAccountID>1</cbc:AdditionalAccountID> 
 <cac:Party>
 <cac:PartyLegalEntity>
  <cbc:RegistrationName>I M</cbc:RegistrationName> 
  </cac:PartyLegalEntity>
  </cac:Party>
  </cac:AccountingCustomerParty>
 <cac:SellerSupplierParty>
 <cac:Party>
 <cac:PostalAddress>
  <cbc:AddressTypeCode /> 
  </cac:PostalAddress>
  </cac:Party>
  </cac:SellerSupplierParty>
 <cac:TaxTotal>
  <cbc:TaxAmount currencyID='PEN'>381.36</cbc:TaxAmount> 
 <cac:TaxSubtotal>
  <cbc:TaxAmount currencyID='PEN'>381.36</cbc:TaxAmount> 
 <cac:TaxCategory>
 <cac:TaxScheme>
  <cbc:ID>1000</cbc:ID> 
  <cbc:Name>IGV</cbc:Name> 
  <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode> 
  </cac:TaxScheme>
  </cac:TaxCategory>
  </cac:TaxSubtotal>
  </cac:TaxTotal>
 <cac:LegalMonetaryTotal>
  <cbc:AllowanceTotalAmount currencyID='PEN'>0.00</cbc:AllowanceTotalAmount> 
  <cbc:ChargeTotalAmount currencyID='PEN'>0.00</cbc:ChargeTotalAmount> 
  <cbc:PayableAmount currencyID='PEN'>2118.64</cbc:PayableAmount> 
  </cac:LegalMonetaryTotal>
 <cac:InvoiceLine>
  <cbc:ID>1</cbc:ID> 
  <cbc:InvoicedQuantity unitCode='NIU'>1</cbc:InvoicedQuantity> 
  <cbc:LineExtensionAmount currencyID='PEN'>2118.6440677966</cbc:LineExtensionAmount> 
 <cac:PricingReference>
 <cac:AlternativeConditionPrice>
  <cbc:PriceAmount currencyID='PEN'>2500</cbc:PriceAmount> 
  <cbc:PriceTypeCode>01</cbc:PriceTypeCode> 
  </cac:AlternativeConditionPrice>
  </cac:PricingReference>
 <cac:AllowanceCharge>
  <cbc:ChargeIndicator>false</cbc:ChargeIndicator> 
  <cbc:Amount currencyID='PEN'>0.00</cbc:Amount> 
  </cac:AllowanceCharge>
 <cac:TaxTotal>
  <cbc:TaxAmount currencyID='PEN'>381.36</cbc:TaxAmount> 
 <cac:TaxSubtotal>
  <cbc:TaxableAmount currencyID='PEN'>381.36</cbc:TaxableAmount> 
  <cbc:TaxAmount currencyID='PEN'>381.36</cbc:TaxAmount> 
 <cac:TaxCategory>
  <cbc:TaxExemptionReasonCode>10</cbc:TaxExemptionReasonCode> 
 <cac:TaxScheme>
  <cbc:ID>1000</cbc:ID> 
  <cbc:Name>IGV</cbc:Name> 
  <cbc:TaxTypeCode>VAT</cbc:TaxTypeCode> 
  </cac:TaxScheme>
  </cac:TaxCategory>
  </cac:TaxSubtotal>
  </cac:TaxTotal>
 <cac:Item>
  <cbc:Description>LAPTOP</cbc:Description> 
 <cac:SellersItemIdentification>
  <cbc:ID /> 
  </cac:SellersItemIdentification>
 <cac:AdditionalItemIdentification>
  <cbc:ID /> 
  </cac:AdditionalItemIdentification>
  </cac:Item>
 <cac:Price>
  <cbc:PriceAmount currencyID='PEN'>2118.6440677966</cbc:PriceAmount> 
  </cac:Price>
  </cac:InvoiceLine>
  </Invoice>";
 
    
    if($archivo = fopen('./Uploading-files-to-Google-Drive-with-PHP-master/files/'.$nombre_archivo, "a"))
    {
        if(fwrite($archivo, $mensaje))
        {
            echo "Se ha ejecutado correctamente";
        }
        else
        {
            echo "Ha habido un problema al crear el archivo";
        }
 
        fclose($archivo);
    }
	 
 ?>
 <a href="./">Volver</a>