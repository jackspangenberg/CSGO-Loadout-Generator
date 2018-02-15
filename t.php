<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<title>Jack's CSGO Loadout Generator</title>
</head><?php
    // Primary Weapons
        $primary=array
        (
        "Nova",
        "XM1014", 
        "Sawed Off", 
        "MAC-10", 
        "MP7", 
        "UMP-45",
        "PP-Bizon",
        "P-90",
        "Galil-AR",
        "AK-47",
        "SSG 08",
        "SG 553",
        "AWP",
        "G3SG1",
        "M249",
        "Negev",
        );
        
        
        
                    // Pistols
        
        $primary_chosen = array_rand($primary, 1);
        
        $primary_name = $primary[$primary_chosen];
        
        
        $pistols=array
        (
            "Glock-18",
            "P250",
            "Desert Eagle or  Revolver",
            "Dual Berettas",
            "CZ75 Auto or Tec-9",
        );
        
        $pistol_chosen = array_rand($pistols, 1);
        $pistol_name = $pistols[$pistol_chosen];
        
        
        
        // Grenades
        
        $grenades=array
        (
            "High Explosive",
            "Decoy",
            "Flashbang",
            "Smoke",
            "Molotov",
            "No Grenades",
        );
        
        $grenade_chosen = array_rand($grenades, 1);
        $grenade_name = $grenades[$grenade_chosen];
        
        
        
        // Gear
        
        $gears=array
        (
        "Kevlar Vest*",
        "Kevlar + Helmet*",
        "Zeus x27*",
        "No Gear"
        );
        
        $gear_chosen = array_rand($gears, 1);
        $gear_name = $gears[$gear_chosen];
    ?>
    
    
    
    
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8">
				<h1 class=" float-left" style="font-weight: lighter;">CS:GO Random Loadout Generator <span class="badge badge-warning">Beta</span></h1>
			</div>
			<div class="col-md-4">
			    <a href="ct.php"><button class="btn btn-danger mt-2 float-right" type="button"><i class="fas fa-sign-out-alt mr-2"></i>Switch to CT</button></a>
			</div>
		</div>
		<hr>
		<br>
		<h1 class=""><small class="text-muted">Primary</small> <?php echo $primary_name; ?></h1><br>
		<br>
		<br>
		<h1 class=""><small class="text-muted">Pistol</small> <?php echo $pistol_name; ?></h1><br>
		<br>
		<br>
		<h1 class=""><small class="text-muted">Grenade</small> <?php echo $grenade_name; ?></h1><br>
		<br>
		<br>
		<h1 class=""><small class="text-muted">Gear</small>  <?php echo $gear_name; ?></h1><br>
		<p class="small">*Disregard if in casual mode</p>
		<hr>
		<br>
		<button class="btn btn-lg btn-primary d-inline" onclick="location.reload();" type="button"><i class="fas fa-retweet mr-2"></i>New Loadout</button>
		<p class="small d-inline ml-3">Or press <kbd>F5</kbd></p>
		<p class="float-right">Developed by Jack Spangenberg</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script>
</body>
</html>