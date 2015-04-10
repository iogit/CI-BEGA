<?php

class Detail extends CI_model{

    function det($prdct_id){


//script error Reporting
        error_reporting(E_ALL);
        ini_set('display_erros','1');

//chechk to see the URL variable is set and that it exists in the database
        if(isset($prdct_id)) //if we can access this id
        {

            $id=preg_replace('#[^0-9]#i','',$_GET['id']); //TO PREVENT people put some character but numbers,people can type and change the URL variables
            //use this var to check to see if this ID exists, if yes then get the product
            //datails,if no then exit this script and give error message why

            $query=$this->db->query("SELECT * FROM prdcts_tbl  WHERE prdct_id='$prdct_id' LIMIT 1");

            $url=base_url();
            $productCount=$query->num_rows(); //count output amount
            $dynamiclist='';
            if($productCount>0)
            {

                //while ($row=$query->row_array()){
                foreach ($query->result() as $row){

                    $prdct_id=$row->prdct_id;
                    $prdct_name=$row->prdct_name;
                    $part_number=$row->part_number;
                    $nsn_number=$row->nsn_number;
                    $prdct_shortDesc=$row->prdct_shortDesc;
                    $prdct_longDesc=$row->prdct_longDesc;

                    $prdct_addDate=strftime("%b %d %Y %X",strtotime($row->prdct_addDate));

                    //$prdct_view++;



                }



            }
            else
            {
                echo "that item does not exist.";
                exit();
            }


        }
        else
        {
            echo "data to render this page is missing";
            exit();
        }


        $images=base_url().'httpdocs/assets/images/';


        mysql_close();
        $detailproduct="";

        $detailproduct.='
<div class="shadow_detail">
        	<div class="row">
	  				<!--PORTFOLIO -->

	  				<div class="col-lg-6">
	  					<div class="flexslider image-slider">
	  						<!--SLIDER -->
	  						<ul class="slides">
	  							<li><a href="'.$images.'products/'.$prdct_id.'.jpg" data-fancybox-group="project-slider" class="fancybox"><img style="width:300px;" src="'.$images.'products/'.$prdct_id.'.jpg" alt="Project Image"></a></li>
	  						</ul>
	  					</div>
	  					<!--SHARE BUTTONS -->

	  				</div>
	  				<div class="col-lg-6">
	  					<!--ITEM DETAILS -->
			  			<h2 class="animate-me fadeInRight project-title">ÜRÜN DETAYI</h2>
			  			<hr class="align-left">
			  			<ul class="post-metadatas">

			  				<li><i class="fa fa-tag"></i><strong>&nbspÜrün Adı </strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : '.$prdct_name.'</li>
			  				<li><i class="fa fa-cogs"></i><strong>NSN Numarası</strong> &nbsp&nbsp&nbsp&nbsp&nbsp : '.$nsn_number.'</li>
			  				<li><i class="fa fa-thumb-tack"></i><strong>&nbspParça Numarası</strong> &nbsp&nbsp&nbsp : '.$part_number.'</li>

			  			</ul>
			  			<hr class="align-left">
			  			<p class="text-justify">
			  			'.$prdct_longDesc.'
			  			<div class="text-right animate-me bounceIn">
			  				<a href="products" class="btn btn-default"><i class="fa fa-link"></i> DİĞER ÜRÜNLER</a>
			  			</div>
	  				</div>
	  			</div>

</div>



        ';

        return $detailproduct;
       // return $commentList;
        exit();


    }}



