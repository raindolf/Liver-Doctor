<?php
$quotes = array(
'None',
#1
'Cirrhosis and chronic liver failure are leading causes of morbidity and mortality in the United States, with the majority of preventable cases attributed to excessive alcohol consumption, viral hepatitis, or nonalcoholic fatty liver disease.. - WHO',
#2
'Your liver is the largest organ inside your body. It helps your body digest food, store energy, and remove poisons. - Medical News Today',
#3
'Patients and communities where these diseases are prevalent are not aware of the 
seriousness of these infections and their consequences. Part of this stems from lack of education in the 
immigrant communities, and part from cultural stigma and cultural concepts of medicine in these 
communities.  - Medical News Today',
#4
'Remember regular exercise is what matters. 5 days of 30 minutes each every week is great. One day per week at 150 minutes is not. - Medical News Today',
#5
'Symptoms of liver diseases include weakness and fatigue, weight loss, nausea, vomiting, and yellow discoloration of the skin (jaundice). - WHO',
#6
'Have you been going to the bathroom to urinate more often recently? Too much glucose (sugar) in your blood will cause you to urinate more often. - Medical News Today',
#7
'If you are urinating more than usual, you will need to replace that lost liquid. You will be drinking more than usual. Have you been drinking more than usual lately? Consult your Doctor. - Medical News Today',
#8
'Centrilobular necrosis of liver can be caused by leakage of enteric toxins into cirulation. Salmonella toxins in ileum have been shown to cause severe damage to liver hepatic cells - WHO',
#9
'As the insulin in your blood is not working properly, or is not there at all, and your cells are not getting their energy, your body may react by trying to find more energy or food thereby causing intense hunger. - Medical News Today',
#10
'Experiencing intense hunger can lead to weight gain due to insuficient amount or lack of insulin in the blood? - Medical News Today',
#11
'If your insulin is not working properly, or is not there at all, glucose will not be entering your cells and providing them with energy. This will make you feel tired and listless. - Medical News Today',
);
$limit = count($quotes) - 1;

//Doctor's results
$doc = array(
//Age
'new_age' => ' ',
'Below 20yrs' => '',
'Between 20yrs - 60yrs' => '',
'Above 60yrs' => '',

//Sugar Intake
'Less than 10' => '',
'Between 11 - 20' => '',
'Between 21 - 30' => '',
'More than 30' => '',

//Alcohol Intake
'None' => 'Patient has likelihood of Hepatitis A. Hepatitis A is a highly contagious liver infection caused by the hepatitis A virus. The hepatitis A virus is one of several types of hepatitis viruses that cause inflammation that affects your liver ability to function.',
'2 - 3' => 'Patient has a likelihood of Hepatitis B. Hepatitis B is a serious liver infection caused by the Hepatitis B virus (HBV). Infection with this virus can cause scarring of the liver, liver failure and liver cancer. ',
'3 - 4' => 'Patient has a likelihood of Hepatitis C. Hepatitis C is an infectious disease affecting primarily the liver, caused by the Hepatitis C virus (HCV). The infection is often asymptomatic but chronic infection can lead to scarring of the liver and ultimately to Cirrhosis which is generally apparent after many years.',
'5 or more' => 'Patient has a likelihood of Cirrhosis. Cirrhosis is scarring of the liver caused by many forms of liver diseases and conditions, such as Hepatitis and chronic alcohol abuse.',



//Exercise
'None in a week' => '',
'Once' => '',
'3 times' => ' ',
'5 times' => '',

//tosis
'tosis1' => '',
'tosis2' => '',
'tosis3' => '',
'tosis4' => '',

//hbv

//hbv
'hbo1' => '',
'hbo2' => 'Patient has a likelihood of Hemochromatosis. Hereditary hemochromatosis (he-me-kroe-muh-TOE-sis) causes your body to absorb too much iron from the food you eat. The excess iron is stored in your organs, especially your liver, heart and pancreas. The excess iron can poison these organs, leading to life-threatening conditions such as cancer, heart arrhythmias and cirrhosis.',
'hbo3' => '',
'hbo4' => '',

//yolo
'yol1' => '',
'yol2' => ' Patient has a likelihood of Cirrhosis. Cirrhosis is scarring of the liver caused by many forms of liver diseases and conditions, such as Hepatitis and chronic alcohol abuse. ',
'yol3' => '',
'yol4' => '',

//spirit
'sp1' => '',
'sp2' => '  ',
'sp3' => ' ',
'sp4' => '',

);
?>