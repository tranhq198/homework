<?php
/**
There is a world database with the following tables:
Countries(code, name, continent, surface_area, population, life_expectancy, gnp, …)
Cities(id, name, country_code, district, population)
CountriesLanguages(country_code, language, official, percentage)
a) Write a MySQL query that will grab all the districts of Vietnam with more than
500,000 people residing in it. You can fake the data as much as you want. Your end result should list three districts:
• Ha Noi
• Ho Chi Minh
• Da Nang

b) Create a MySQL query that will grab the top 5 most popular English-speaking nations. You may need to join some or all of the three tables provided: Cities, Countries, and CountriesLanguages. The result of the query should be:
• Viet Nam
• Japan
• United Kingdom
• South Africa
• Canada
 */

$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'world-database';

$conn = mysqli_connect($server_host, $server_username, $server_password, $database);
mysqli_query($conn, "SET NAMES 'UTF8'");

$sql = "SELECT `name` FROM `cities` WHERE population > 500000;";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    echo "Result (part a): "."<br>"."<br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["name"]."<br>";
    }
}
else {
    echo "Không có record nào";
}


//b
$sql = "SELECT countries.name 
    FROM countries LEFT JOIN countrieslanguages 
    ON (countries.code = countrieslanguages.countryCode) 
    ORDER BY countrieslanguages.percentage
    LIMIT 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
    echo "Result (part a): "."<br>"."<br>";
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["name"]."<br>";
    }
}
else {
    echo "Không có record nào";
}
