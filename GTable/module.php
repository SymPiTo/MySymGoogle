<?php
/***************************************************************************
 * Title: _TITEL_
 *
 * Author: _AUTOR_
 * 
 * GITHUB: <https://github.com/SymPiTo/MySymApps/tree/master/_TITEL_>
 * 
 * Version: _VERSION_
 *************************************************************************** */
require_once __DIR__ . '/../libs/vendor/autoload.php';
require_once __DIR__ . '/../libs/_HELPERCLASS_';  // diverse Klassen

class _CLASS_ extends IPSModule {

    use DebugHelper,
    InstanceStatus,
    BufferHelper,
    Semaphore;
/* 
___________________________________________________________________________ 
    Section: Internal Modul Funtions
    Die folgenden Funktionen sind Standard Funktionen zur Modul Erstellung.
___________________________________________________________________________ 
    */
    /* 
    ------------------------------------------------------------ 
        Function: Create  
        Create() Wird ausgeführt, beim anlegen der Instanz.
    -------------------------------------------------------------
    */
    public function Create() {
    //Never delete this line!
        parent::Create();

        //Register Properties from form.json
        $this->RegisterPropertyBoolean("Active", false);
/*
        $this->ReadPropertyFloat("NAME", 0.0);

        $this->ReadPropertyInteger("NAME", 0);

        $this->ReadPropertyString("NAME", "");

        // Register Profiles
        $this->RegisterProfiles();

        //Register Variables
        $variablenID = $this->RegisterVariableBoolean ($Ident, $Name, $Profil, $Position);
        IPS_SetInfo ($variablenID, "WSS");
        IPS_SetHidden($variablenID, true); //Objekt verstecken
		//Register BoolVariable1
		//Register BoolVariable2
		//Register BoolVariable3
		//Register BoolVariable4
		//Register BoolVariable5
		//Register BoolVariable6
		//Register BoolVariable7
		//Register BoolVariable8
		//Register BoolVariable9
		//Register BoolVariable10

        $variablenID = $this->RegisterVariableFloat ($Ident, $Name, $Profil, $Position);
        IPS_SetInfo ($variablenID, "WSS");
        IPS_SetHidden($variablenID, true); //Objekt verstecken
		//Register FloatVariable1
		//Register FloatVariable2
		//Register FloatVariable3
		//Register FloatVariable4
		//Register FloatVariable5
		//Register FloatVariable6
		//Register FloatVariable7
		//Register FloatVariable8
		//Register FloatVariable9
		//Register FloatVariable10

        $variablenID = $this->RegisterVariableInteger ($Name, $Name, $Profil, $Position);
        IPS_SetInfo ($variablenID, "WSS");
        IPS_SetHidden($variablenID, true); //Objekt verstecken
		//Register IntVariable1
		//Register IntVariable2
		//Register IntVariable3
		//Register IntVariable4
		//Register IntVariable5
		//Register IntVariable6
		//Register IntVariable7
		//Register IntVariable8
		//Register IntVariable9
		//Register IntVariable10

        $variablenID = $this->RegisterVariableString ($Name, $Name, $Profil, $Position); 
        IPS_SetInfo ($variablenID, "WSS");
        IPS_SetHidden($variablenID, true); //Objekt verstecken
		//Register StringVariable1
		//Register StringVariable2
		//Register StringVariable3
		//Register StringVariable4
		//Register StringVariable5
		//Register StringVariable6
		//Register StringVariable7
		//Register StringVariable8
		//Register StringVariable9
		//Register StringVariable10

        //Register Timer
        $this->RegisterTimer('Name', 0, '_PREFIX__Scriptname($_IPS[\'TARGET\']);');

        // Verbinde mit neu erstellten Splitter, falls noch keine Verbindung besteht
        $this->RequireParent("{}");
        // Verbinde mit neu erstellten IO, falls noch keine Verbindung besteht
        $this->RequireParent("{}");

        //Webfront Actions setzen
        $this->EnableAction("IDENT der registrierten Variable");
    } //Function: Create End
    /* 
    ------------------------------------------------------------ 
        Function: ApplyChanges  
        ApplyChanges() Wird ausgeführt, beim anlegen der Instanz.
        und beim ändern der Parameter in der Form
    -------------------------------------------------------------
    */
    public function ApplyChanges(){
        //Never delete this line!
        parent::ApplyChanges();

        //Messages registrieren
        $this->RegisterMessage(0, IPS_KERNELSTARTED);
        $this->RegisterMessage($this->InstanceID, FM_CONNECT);
        $this->RegisterMessage($this->InstanceID, FM_DISCONNECT);
/*
        if($this->ReadPropertyBoolean("Active")){
            //Splitter oder IO verbinden
            $this->ConnectParent("{8AA55C67-B28A-C67B-5332-99CCE8190ACA}");
            //Filter setzen - ForwardData wird nur aufgerufen wenn Filter passt (string $ErforderlicheRegexRegel )$this->SetForwardDataFilter(".*");  
            //Filter setzen - ReceiveData wird nur aufgerufen wenn Filter passt (string $ErforderlicheRegexRegel )$this->SetReceiveDataFilter(".*");  
        }
        else {
            //Timer ausschalten
            $this->SetTimerInterval("Name", 0);
        }                   
    } //Function: ApplyChanges  End
    /* 
    ------------------------------------------------------------ 
        Function: Destroy  
            Destroy() wird beim löschen der Instanz 
            und update der Module aufgerufen
    -------------------------------------------------------------
    */
    public function Destroy() {
        //Never delete this line!
        parent::Destroy();
    } //Function: Destroy End
    /* 




















    /* 














    /* 






























    
_____________________________________________________________________________________________________________________
    Section: Public Funtions
    Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
    Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wie folgt zur Verfügung gestellt:
    
    FSSC_XYFunktion($Instance_id, ... );
________________________________________________________________________________________________________________________ 
*/
    //-----------------------------------------------------------------------------
    /* Function: xxxx
    ...............................................................................
    Beschreibung
    ...............................................................................
    Parameters: 
        none
    ...............................................................................
    Returns:    
        none
    ------------------------------------------------------------------------------  */
    public function Autentification(){
       /* 
        * We need to get a Google_Client object first to 
        handle auth and api calls, etc. 
        */ 
        $client = new \Google_Client(); 
        $client->setApplicationName('MyGTab'); 
        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]); 
        $client->setAccessType('offline'); 
        /* 
        * The JSON auth file can be provided to the Google 
        Client in two ways, one is as a string which is 
        assumed to be the 
        * path to the json file. This is a nice way to 
        keep the creds out of the environment. 
        * 
        * The second option is as an array. For this 
        example I'll pull the JSON from an environment 
        variable, decode it, and 
        * pass along. 
        */ 
        $jsonAuth = '
        {
            "type": "service_account",
            "project_id": "mygtab",
            "private_key_id": "933bfbd0e2ff0ab12136cafabefcfde530c34366",
            "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDgbzALSpLshPE8\nN2aaJPZYsQ7cqDK/ip31nBoatJfN8C4XtltquA+BlHRGObIBP9NMKEDTLOty8ncS\npJEA5wW/xriDqVgd7fTO2vw/jMxQfR/N5jZpYUsPW2z0dHf1dl14qV2jhTyZ8WWf\n56sohUlUctnRvprkKsJn5a6nL0bWwxMRjYOjrsCE/q+RQVC3uDc+u5ghL6t3CdvN\nLJmiuwVXyE6vDgyfdTdizUEgxDO66Nn9/2vMfMtMeDsMI2HNRAHL4fb1CJ1C/n+Y\n9Oa/KBmWIoACeT4TeFkswyMcNOdXEQ7FGrjx8CQCvwciCwlr/sunL/Z0rloTVFVC\n5ITPfGgBAgMBAAECggEAC755ub+IXmjK/EsMWwjP3L6AH/cLt8brwtpNKeRVFL1K\nlipQUI5q3k2bw4B5onPZ7VBmav584BYUucSjg1PzcrB1/4q9HgzRfIEMRdGK7/PK\nNiKjqoJBNJ+kvQp6q/0qgTnAmQHL9OTDO/m6FLvbxVfgssdp8MJVi60CxYQVbX+s\n34aWOuwHNyt1h3En3zRXxxngcMVvWMln9LdmgpoFNUqQkjDshZf2oA967f4ye7FV\n/LewwMpnXmpGjbkjdQJsbUt3fr4khrhjsCbwBn6iPFTZy1i+SeKTBQB3Kruck073\nRFZj3RGEHC4Elx2ytjbbvRpqfBaUwZGqOQ+PJV/76QKBgQD2TuNETWuWs/bOtp/S\n/qd344Sd7hlnvVahFAwHBYiVgNzeCVjtmm2wHlia7NCPS3YVQiepS6Ep8bEpaBCa\nbh2d0u98jKg/0ZTrzPbsbePJwVY9S0jk0TSL2NS9Bm+SXbqukakpa5d8AeiqCXhI\nVkKj2pUs8T48NJXxy967tYKQ+QKBgQDpQ/XbdKmgsv/bfJZJ+TXZda9dXCTb5lvX\n//O4Ok2h+J9AjduDJDvefkEWB4aoBHPFrBaBLWqb30AdaFb1FU/rOtLceyi40ua0\nnIPimkyXDJUV4iMnVkMstuhnqBJdkuzMLU+GNySovDJ9Erql/mlFOSRvBQiIro3h\n0d5FeM7ZSQKBgGGN6zuxQkylKLrE4FZsYB3+8havKEbLWhVgYEcjrO4x5MjYgO1S\nveEEk+mApDYtGC7hTd4iw0leneGdgv33YSmSUyJMf5MPSmF+g8ou2Aqf1a1fNRbT\nuXEuR0w60VPyZa8gqBRstcn645D9QTO9XpWRTIZJYnHsDft/2M8V3AnZAoGBAMUk\nZrkek+342jxJw0qpkFVFHPyuT4h5281lyDk/LTVixlTsj0T6bo7P7XoMykVd3eqG\nUk7Cb4Nk3u77q+JeLLkFcghdHkF2HP0v+ladSXWvcKCaClPIl+VGgIx6g2sKLY8y\nDC/Gkvj4dUM3fP+lUJrsfFpHyrqZq9faYxwbydXhAoGBAINTLmgJKKlGvdFnifiv\n4F05UjxXzjl8caxThanaOmeEcr0YAMMgWMVggyGXOfUJIO82lNkx54XnabQw4+wB\nAIgTVtsTwNgpYNEXhm5qd6KHZ6QMS2kjYVenvSQNi0wX4oK+ZtP9QXgu0tOyulmS\n4gfE03U+Z8TKVlEGb8tKAEAv\n-----END PRIVATE KEY-----\n",
            "client_email": "mygoo-801@mygtab.iam.gserviceaccount.com",
            "client_id": "108894703950212906426",
            "auth_uri": "https://accounts.google.com/o/oauth2/auth",
            "token_uri": "https://oauth2.googleapis.com/token",
            "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
            "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/mygoo-801%40mygtab.iam.gserviceaccount.com"
          }';
          
        $client->setAuthConfig(json_decode($jsonAuth, true));



    }  //xxxx End

/* 
_______________________________________________________________________
    Section: Private Funtions
    Die folgenden Funktionen sind nur zur internen Verwendung verfügbar
    Hilfsfunktionen
______________________________________________________________________
*/ 
    /* ----------------------------------------------------------------------------
    Function: createProfile
    ...............................................................................
    Erstellt ein neues Profil und ordnet es einer Variablen zu.
    ...............................................................................
    Parameters: 
        $Name, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits, $Vartype, $VarIdent, $Assoc
     * $Vartype: 0 boolean, 1 int, 2 float, 3 string,
     * $Assoc: array mit statustexte
     *         $assoc[0] = "aus";
     *         $assoc[1] = "ein";
     *  
    ..............................................................................
    Returns:   
        none
    ------------------------------------------------------------------------------- */
    protected function createProfile(string $Name, int $Vartype, $Assoc, $Icon,  $Prefix,  $Suffix,   $MinValue,   $MaxValue,  $StepSize,  $Digits){
        if (!IPS_VariableProfileExists($Name)) {
            IPS_CreateVariableProfile($Name, $Vartype); // 0 boolean, 1 int, 2 float, 3 string,
            if(!is_Null($Icon)){
                IPS_SetVariableProfileIcon($Name, $Icon);
            }
            if(!is_Null($Prefix)){
                IPS_SetVariableProfileText($Name, $Prefix, $Suffix);
            }
            if(!is_Null($Digits)){
                IPS_SetVariableProfileDigits($Name, $Digits); //  Nachkommastellen
            }
            if(!is_Null($MinValue)){
                IPS_SetVariableProfileValues($Name, $MinValue, $MaxValue, $StepSize);
            }
            if(!is_Null($Assoc)){
                foreach ($Assoc as $key => $data) {
                    if(is_null($data['icon'])){$data['icon'] = "";}; 
                    if(is_null($data['color'])){$data['color'] = "";}; 
                    IPS_SetVariableProfileAssociation($Name, $data['value'], $data['text'], $data['icon'], $data['color']);  
                }
            }
        } 
        else {
            $profile = IPS_GetVariableProfile($Name);
            if ($profile['ProfileType'] != $Vartype){
                // $this->SendDebug("Alarm.Reset:", "Variable profile type does not match for profile " . $Name, 0);
            }
        }
    }   //Function: createProfile End
    
    
    
    /* ----------------------------------------------------------------------------
     Function: RegisterProfiles()
    ...............................................................................
        Profile für Variable anlegen falls nicht schon vorhanden
    ...............................................................................
    Parameters: 
        $Vartype => 0 boolean, 1 int, 2 float, 3 string
    ..............................................................................
    Returns:   
        $ipsversion
    ------------------------------------------------------------------------------- */
    protected function RegisterProfiles(){
       /*   Profile "UPNP_Browse";   
        $Assoc[0]['value'] = 0;
        $Assoc[1]['value'] = 1;
        $Assoc[2]['value'] = 2;
        $Assoc[3]['value'] = 3;
        $Assoc[0]['text'] = "Up";
        $Assoc[1]['text'] = "Select";
        $Assoc[2]['text'] = "Left";
        $Assoc[3]['text'] = "Right";
        $Assoc[0]['icon'] = NULL;
        $Assoc[1]['icon'] = NULL;
        $Assoc[2]['icon'] = NULL;
        $Assoc[3]['icon'] = NULL;
        $Assoc[0]['color'] = NULL;
        $Assoc[1]['color'] = NULL;
        $Assoc[2]['color'] = NULL;
        $Assoc[3]['color'] = NULL;
        $Name = "UPNP_Browse";
        $Vartype = 1;
        $Icon = NULL;
        $Prefix = NULL;
        $Suffix = NULL;
        $MinValue = 0;
        $MaxValue = 3;
        $StepSize = 1;
        $Digits = 0;
        if (!IPS_VariableProfileExists($Name)){
            $this->createProfile($Name, $Vartype,  $Assoc, $Icon, $Prefix, $Suffix, $MinValue, $MaxValue, $StepSize, $Digits);  
        }
        */
    } //Function: RegisterProfiles End

    /** Wird ausgeführt wenn der Kernel hochgefahren wurde. */
    protected function KernelReady(){
        $this->ApplyChanges();
    }
    /* ----------------------------------------------------------------------------
     Function: GetIPSVersion()
    ...............................................................................
        gibt die eingestezte IPS Version zurück
    ...............................................................................
    Parameters: 
        none
    ..............................................................................
    Returns:   
        $ipsversion
    ------------------------------------------------------------------------------- */
    protected function GetIPSVersion(){
        $ipsversion = floatval(IPS_GetKernelVersion());
        if ($ipsversion < 4.1) {    // 4.0
            $ipsversion = 0;
        } elseif ($ipsversion >= 4.1 && $ipsversion < 4.2){ // 4.1
            $ipsversion = 1;
        } elseif ($ipsversion >= 4.2 && $ipsversion < 4.3){ // 4.2
            $ipsversion = 2;
        } elseif ($ipsversion >= 4.3 && $ipsversion < 4.4){ // 4.3
            $ipsversion = 3;
        } elseif ($ipsversion >= 4.4 && $ipsversion < 5){ // 4.4
            $ipsversion = 4;
        } else {  // 5
            $ipsversion = 5;
        }
        return $ipsversion;
    } //Function: GetIPSVersion End
    /* --------------------------------------------------------------------------- 
    Function: RegisterEvent
    ...............................................................................
    legt einen Event an wenn nicht schon vorhanden
      Beispiel:
      ("Wochenplan", "SwitchTimeEvent".$this->InstanceID, 2, $this->InstanceID, 20);  
      ...............................................................................
    Parameters: 
      $Name        -   Name des Events
      $Ident       -   Ident Name des Events
      $Typ         -   Typ des Events (0=ausgelöstes 1=cyclic 2=Wochenplan)
      $Parent      -   ID des Parents
      $Position    -   Position der Instanz
    ...............................................................................
    Returns:    
        none
    -------------------------------------------------------------------------------*/
    private function RegisterEvent($Name, $Ident, $Typ, $Parent, $Position){
        $eid = @$this->GetIDForIdent($Ident);
        if($eid === false) {
                $eid = 0;
        } elseif(IPS_GetEvent($eid)["EventType"] <> $Typ) {
                IPS_DeleteEvent($eid);
                $eid = 0;
        }
        //we need to create one
        if ($eid == 0) {
                $EventID = IPS_CreateEvent($Typ);
                IPS_SetParent($EventID, $Parent);
                IPS_SetIdent($EventID, $Ident);
                IPS_SetName($EventID, $Name);
                IPS_SetPosition($EventID, $Position);
                IPS_SetEventActive($EventID, false);  
        }
    } //Function: RegisterEvent End

} //end Class

