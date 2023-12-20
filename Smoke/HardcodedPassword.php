<?php class PhpSamples {
    function HardcodedPasswordSample()
    {
        $hardcodedHarmlessValue = "%USERNAME%";
        $pass = 'P@SSw0rd';
		$Pass = "P@SSw0rd";
		$hardcodedPasswordValue3 = NULL;
        $this->harmlessValue_hardcoded = "%USERNAME%";
        $this->passwordValue_hardcoded = 'P@SSw0rd';
        PhpSamples::$harmlessValue_hardcoded = '%USERNAME%';
        PhpSamples::$passwordValue_hardcoded = 'P@$$w0rd';
		$hardcodedPasswordValue2 = <<<EOL
		super
		mega
		password
EOL;
		$hardcodedPasswordValue3 = "one
		two
		pass";
		$pwd = 'some string';
		$pWd2 = 'some string';
		$Pwd3 = "some@string";

    }
}
?>