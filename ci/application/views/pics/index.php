<?php
    //application/views/pics/index.php
$this->load->view($this->config->item('theme') . 'header'); //slug comes from custom_config file
echo '<h2>Picture Categories</h2>';
echo '<h3><a href="' . site_url('pics/' . 'Pandas') . '">' . 'Pandas </a></h3>';
echo '<h3><a href="' . site_url('pics/' . 'Red Pandas') . '">' . 'Red Pandas </a></h3>';
echo '<h3><a href="' . site_url('pics/' . 'Baby Pandas') . '">' . 'Baby Pandas </a></h3>';




$this->load->view($this->config->item('theme') . 'footer'); 
?>