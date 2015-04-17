<?php
$geneticCode = array(
    'F' => array('TTT', 'TTC'),
    'L' => array('TTA', 'TTG', 'CTT', 'CTC', 'CTA', 'CTG'),
    'S' => array('TCT', 'TCC', 'TCA', 'TCG', 'AGT', 'AGC'),
    'Y' => array('TAT', 'TAC'),
    'STOP' => array('TAA', 'TAG', 'TGA'),
    'C' => array('TGT', 'TGC'),
    'W' => array('TGG'),
    'P' => array('CCU', 'CCC', 'CCA', 'CCG'),
    'H' => array('CAT', 'CAC'),
    'Q' => array('CAA', 'CAG'),
    'R' => array('CGT', 'CGC', 'CGA', 'CGG', 'AGA', 'AGG'),
    'I' => array('ATT', 'ATC', 'ATA'),
    'M' => array('ATG'),
    'T' => array('ACT', 'ACC', 'ACA', 'ACG'),
    'N' => array('AAT', 'AAC'),
    'K' => array('AAA', 'AAG'),
    'V' => array('GTT', 'GTC', 'GTA', 'GTG'),
    'A' => array('GCT', 'GCC', 'GCA', 'GCG'),
    'D' => array('GAT', 'GAC'),
    'E' => array('GAA', 'GAG'),
    'G' => array('GGT', 'GGC', 'GGA', 'GGG')
);


if (isset($_POST)) {
    $seq = strtoupper($_POST['seq']);
}

$seq = strtoupper('atgtactaa');
$seqSize = strlen($seq);
echo $seq .' : ';

if (preg_match('/^(ATG)[T|A|C|G]*(TAA|TAG|TGA)$/', $seq) && ($seqSize%3==0)) {
    echo 'Valid sequence';

    $start = substr($seq, 0, 3);
    $stop = substr($seq, $seqSize-3, $seqSize);

    $protein = array();
    $protein[] = $start;

    for ($i=3; $i < $seqSize-3; $i += 3) { 
        $protein[] = substr($seq, $i, 3);
    }

    decodeProtein($protein, $geneticCode);
    var_dump($protein);
} else {
    echo 'Invalid sequence';
}

function decodeProtein(&$protein, $geneticCode) {
    foreach ($protein as $i => $code) {
        if (($prot = getProteinByCode($code, $geneticCode)) != null) {
            $protein[$i] = $prot;
        }
    }
}

function getProteinByCode($code, $geneticCode) {
    foreach ($geneticCode as $prot => $codes) {
        if (in_array($code, $codes)) {
            return $prot;
        }
    }

    return null;
}
