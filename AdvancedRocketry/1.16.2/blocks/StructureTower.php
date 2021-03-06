<?php
    /*  HOW TO USE THIS TEMPLATE
        If you are unsure how to use this, please see any of the other pages for a reference. 

        Descriptions can include any HTML tags. Please link to other pages when you reference a block or item the first time. 

        <a href="Cables.php">data pipes</a>

        Please follow these naming conventions when submitting images for blocks:
            
            PAGE IMAGE = nameOfBlock_demo.png
            SIDE BAR IMAGE = nameOfBlock_block.png
            ICON IMAGE FOR LIST PAGE = nameOfBlock_icon.png
        
        Place images in the img folder. Be sure to update blocks/index.html with a link to your block page.
    
    */    
    
    //NAME OF BLOCK
    $title = 'Structure Tower';

    $imageDemoName = 'structureTowerDemo.jpg';
    
    //USE <p></p> to make a new paragraph 
    $description1 = '<p>Made from Steel rods, the Structure Tower defines the vertical distance for a <a href="RocketAssemblingMachine.php">Rocket Assembling Machine</a>, which is constructed from <a href="LaunchPad.php">Launch Pad blocks</a>, Structure Tower Blocks, and the machine itself.</p>
    <p>Structure Towers are also used to define the size of the area for the <a href="UnmannedVehicleAssembler.php">Unmanned Vehicle Assembler</a> to use.</p>';
    
    //FILL IN THIS PART IF THE BLOCK HAS A GUI
    $imageGUI = '';
    $descriptionGUI =''; 
    
    $sidebarImage = 'structureTower_block.png';

    $hardness = '2';
    $blastResistance = '0';
    $requiresTool = 'YES';
    $fullBlock = 'YES';
    $sealable = 'NO';
    $tileEntity = 'NO';
    $multiBlock = 'NO';
    $other ='';

    include($_SERVER["DOCUMENT_ROOT"].'/AdvancedRocketry/template.php');
?> 
