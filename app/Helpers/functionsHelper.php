<?php

/**
 * Encodes json
 * @param json $data json object to encode
 * @param string $status status
 * @param string $msg
 * @return json
 */
function retJson($status, $data = '', $msg = '') {
    return json_encode(
        array( 
            'status' => $status, 
            'data' => $data, 
            'msg' => $msg 
        )
    );
}


/**
 * Generates Breadcrumbs
 * @param array $crumbs
 * @return string
 */
function breadcrumbs($crumbs) {
    $breadcrumbs = '<div class="breadcrumbs">';
    
    $count = 0;
    foreach($crumbs as $name => $route) {
        $count ++;
        
        if($route) {
            $breadcrumbs .= '<a href="'.$route.'"'.'>'.$name.'</a>';
        } else {
            $breadcrumbs .= '<span>'.$name.'</span>';
        }

        if($count < count($crumbs)) {
            $breadcrumbs .= ' <i class="icon-arrow-right" aria-hidden="true"></i> ';
        }
    }

    $breadcrumbs .= '</div>';

    return $breadcrumbs;
}