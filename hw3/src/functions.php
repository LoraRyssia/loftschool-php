<?php

// #1

function task1()
{
    $file = file_get_contents("src/data.xml");
    $xml = new SimpleXMLElement($file);
    echo "<p>Purchase Order: #" . ($xml->attributes()->PurchaseOrderNumber->__toString()) . "</p>";
    echo "<p>Order date: " . ($xml->attributes()->OrderDate->__toString()) . "</p>";
    foreach ($xml->Address as $address) {
        echo "<p>" . ($address->attributes()->Type) . " Address: <br>" . ($address->Name) . ",<br>"
            . ($address->Street) . ",<br>"
            . ($address->City) . ", "
            . ($address->State) . ",<br>"
            . ($address->Zip) . ", "
            . ($address->Country) . "</p>";
    }
    if ($xml->DeliveryNotes) {
        echo "<p>Delivery Notes: " . ($xml->DeliveryNotes) . "</p>";
    }
    foreach ($xml->Items->Item as $product) {
        echo "<p>Product Part #" . ($product->attributes()->PartNumber->__toString()) . "<br>"
            . "Product Name: " . ($product->ProductName) . "<br>"
            . "Quantity: " . ($product->Quantity->__toString()) . "<br>"
            . "Price: USD" . ($product->USPrice->__toString()) . "<br>";
        if ($product->Comment) {
            echo "Comment: " . ($product->Comment->__toString()) . "<br>";
        }
        if ($product->ShipDate) {
            echo "Date of Shipment: " . ($product->ShipDate->__toString());
        }
        echo "</p>";
    }
}

// #2

function task2()
{
    $data = array
    (
        array("name" => "Volvo", "in_stock" => 22, "sold" => 18),
        array("name" => "BMW", "in_stock" => 15, "sold" => 13),
        array("name" => "Saab", "in_stock" => 5, "sold" => 2),
        array("name" => "Land Rover", "in_stock" => 17, "sold" => 15)
    );

    $json_content = json_encode($data);
    file_put_contents("./output.json", $json_content);
}

function task3()
{
    $json_content = file_get_contents("./output.json");
    $data = json_decode($json_content, true);
    $rand = rand(0, 1);
    if ($rand === 1) {
        $diff = rand(-5, 7);
        $data[1]["in_stock"] += $diff;
    }
    $json_content = json_encode($data);
    file_put_contents("./output2.json", $json_content);
}

function task4()
{
    $json_content1 = file_get_contents("./output.json");
    $json_content2 = file_get_contents("./output2.json");

    $data1 = json_decode($json_content1, true);
    $data2 = json_decode($json_content2, true);

    $target_var1 = $data1[1]["in_stock"];
    $target_var2 = $data2[1]["in_stock"];

    $compare = $target_var2 - $target_var1;

    if ($compare === 0) {
        echo "BMW in stock remained unchanged!<br>";
    } elseif ($compare > 0) {
        echo "BMW in stock increased by " . $compare . "<br>";
    } else {
        echo "BMW in stock decreased by " . (-1)*$compare . "<br>";
    }
}

// #3
function task5()
{
    $array = [];
    for ($i = 0; $i < 50; $i++) {
        $array[$i] = rand(1, 100);
    }
    $file = fopen("./output.csv", "w");
    fputcsv($file, $array, "; ");
    fclose($file);
}

function task6()
{
    $csvPath = "./output.csv";
    $csvFile = fopen($csvPath, "r");
    if ($csvFile) {
        $csvData[] = fgetcsv($csvFile, 250, ";");
        $data = $csvData[0];
    }
    $even_sum = 0;
    for ($i = 0; $i < 50; $i++) {
        if ($data[$i] % 2 === 0) {
            $even_sum += $data[$i];
        }
    }
    echo $even_sum;
}

// #4

function task7()
{
    $string = file_get_contents
    ("https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
    $title_start = strpos($string, "title") + strlen("title\":\"");
    $title_substring = substr($string, $title_start, 255);
    $title_length = stripos($title_substring, "\"");
    echo "Title:   " . substr($title_substring, '0', $title_length) . '<br/>';

    $pageid_start = strpos($string, "pageid") + strlen("pageid\":\"");
    $pageid_substring = substr($string, $pageid_start, 255);
    $pageid_length = stripos($pageid_substring, ",");
    echo "Page ID:   " . substr($pageid_substring, '0', $pageid_length) . '<br/>';
    //echo "<pre>";
    //print_r ($string);
}
