<?php

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