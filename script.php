function getXAmountOfWordsFromAString($string, $numberOfWords){
        $words = explode(" ", $string);
        $selectedWords = [];
        for($i = 0; $i <=$numberOfWords; $i++) array_push($selectedWords, $words[$i]);
        $selectedWords = implode(" ", $selectedWords)."...";
        return $selectedWords;
    }
