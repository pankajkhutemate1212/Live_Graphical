<?php $this->load->view('elements/meta_header_noindex'); ?>

<?php $this->load->view('metadata_files/header_view'); ?>

    <?php $this->load->view('elements/header'); ?>

        <?php $this->load->view($content); ?>

          <?php $this->load->view('elements/footer'); ?>