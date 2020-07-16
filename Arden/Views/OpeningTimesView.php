<?php

namespace Arden\Views;

class OpeningTimesView extends View
{
    public function __construct($data = null)
    {
        if($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {
        // Render opening times\
        echo "<table border='2' width='400'><thead><th>Day</th><th>Status</th></thead>";
        echo "<tbody align='center'>"; 
        foreach($this->data as $key => $val) {
            if($key == 'days') {
                foreach($val as $day) {
                    echo '<tr><td>'. $day.'</td>';
 

                    foreach($this->data['opening_hours'] as $d => $hours) {
                        if($d == $day) {
                            echo '<td>'.$hours.'</td></tr>';
                            break;
                        }
                        if(!array_key_exists($day, $this->data['opening_hours']))
                        {
                            echo '<td>&nbsp</td></tr>';break;
                        }
                    }
 
                }
            }

        }
        echo "</tbody></table>";
    }
}