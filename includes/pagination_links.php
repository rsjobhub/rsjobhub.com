
<?php
echo '<div class="pagination-outer"><div class="pagination-style1"><ul class="clearfix">';

// Previous button
if ($current_page > 1) {
    echo '<li class="prev"><a href="?page=' . ($current_page - 1) . '"><span><i class="fa fa-angle-left"></i></span></a></li>';
}

// Calculate start and end of page numbers to show
$start = max(1, $current_page - 2);
$end = min($total_pages, $current_page + 2);

// If the start is greater than 1, show the first page and an ellipsis
if ($start > 1) {
    echo '<li><a href="?page=1">1</a></li>';
    if ($start > 2) {
        echo '<li><a href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>';
    }
}

// Display page numbers
for ($i = $start; $i <= $end; $i++) {
    $active = ($i == $current_page) ? 'class="active"' : '';
    echo '<li ' . $active . '><a href="?page=' . $i . '">' . $i . '</a></li>';
}

// If the end is less than the total pages, show the last page and an ellipsis
if ($end < $total_pages) {
    if ($end < $total_pages - 1) {
        echo '<li><a href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>';
    }
    echo '<li><a href="?page=' . $total_pages . '">' . $total_pages . '</a></li>';
}

// Next button
if ($current_page < $total_pages) {
    echo '<li class="next"><a href="?page=' . ($current_page + 1) . '"><span><i class="fa fa-angle-right"></i></span></a></li>';
}

echo '</ul></div></div>';
?>