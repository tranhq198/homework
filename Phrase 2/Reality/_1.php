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

"SELECT Countries.name 
    FROM Countries LEFT JOIN CountriesLanguages 
    ON (Countries.code = CountriesLanguages.country_code) 
    ORDER BY CountriesLanguages.percentage DESC
    LIMIT 5";


