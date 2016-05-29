<?php
include 'arrays.php';
function newsPrint(){
$array=News();
    $counter=0;
foreach($array as $value){
					echo "<section id='$counter' class='innerContent'>
					<h4>".$value['title']."</h4>
                    <span class='datePost'>".$value['date_created']."</span>
                    <p class='news'>".$value['news'] ."</p>
                        <a class='extend' >View more</a>
					</section>";
                $counter+=1;
            }
}

function reviewsPrint(){
	$rev=Reviews();
						foreach($rev as $key => $value){
					
					echo
					 "<section class='innerContent'>

                    <span class='datePost'>".$value['name']."</span>
                    <p>".
                        $value['comment']
						."
                    </p>
                        <img  class=star_".$value['rate']." />

                    </section>";
				}

               }

                ?>

