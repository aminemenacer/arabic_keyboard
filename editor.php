<style>
  #snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: rgb(49, 114, 30);
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
  }

  #snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
  }

  @-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
  }

  @keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
  }

  @-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
  }

  @keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
  }

</style>

<?php
  include_once('./template/navbar.php');
  include_once('./template/logged_off_tabs.php')
?>

<html>
<header>
<title>Multimedia graphics editor</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </header>

   

<body overflow: hidden;>

<!-- baa src file -->
  <defs>
    <g id="baa_byitsself">
					<path onclick="myFunction()" id="L02" fill="#000000" d="M49.28 229.52Q38.92 216.7 45.89 196.81Q48.76 188.81 56.87 179.68Q59.84 176.4 61.99 178.55Q64.04 180.61 61.27 183.58Q53.79 191.58 54.92 198.55Q58.92 222.75 117.98 222.75Q168.02 222.85 200.83 204.39Q199.09 196.7 191.5 190.14Q189.55 188.4 190.58 185.22L196.83 166.66Q198.78 160.92 203.29 167.89Q213.96 184.4 209.96 208.6Q207.91 220.49 200.93 224.9Q166.58 246.64 117.16 249.31Q67.43 251.97 49.28 229.52ZM117.67 288.07L127.82 272.89Q129.05 271.15 131.41 271.87Q140.02 274.94 146.79 280.89Q148.54 282.63 147.41 284.68L137.36 300.58Q135.72 302.73 133.56 301.09Q131.41 299.35 118.39 291.55Q116.24 290.22 117.67 288.07Z" />
					<use id="fatha" href="#img1" transform="matrix(1,0,0,1,83,60)"/>
					<use id="fathax2" href="#img2" transform="matrix(1,0,0,1,58,60)"/>
					<use id="kesra" href="#img1" transform="matrix(1,0,0,1,88,280)"/>
					<use id="kesrax2" href="#img2" transform="matrix(1,0,0,1,68,295)"/>
					<use id="dama" href="#img3" transform="matrix(1,0,0,1,73,60)"/>
					<use id="DAMAX2" href="#img4" transform="matrix(1,0,0,1,73,60)"/>
					<use id="shada_f" href="#img5" transform="matrix(1,0,0,1,68,40)"/>
					<use id="shada_f2" href="#img6" transform="matrix(1,0,0,1,88,45)"/>
					<use id="shada_k" href="#img7" transform="matrix(1,0,0,1,63,40)"/>
					<use id="shada_k2" href="#img8" transform="matrix(1,0,0,1,63,40)"/>
					<use id="shada_d" href="#img9" transform="matrix(1,0,0,1,83,40)"/>
					<use id="H34" href="#img10" transform="matrix(1,0,0,1,68,60)"/>
					<use id="sukoon" href="#img11" transform="matrix(1,0,0,1,83,70)"/>
					<use id="H5" href="#img12" transform="matrix(1,0,0,1,73,81)"/>
				</g>
				<g id="baa_middle" style="display: none">
					<path id="ـبـ " onclick="myFunction()" fill="#000000" d="M58.79 249.08Q54.8 248.77 53.36 243.64L50.69 234.52Q48.75 226.11 55.82 224.26Q57.46 223.85 68.13 224.47Q78.79 224.98 89.25 224.47Q99.81 223.85 101.35 224.26Q106.58 225.49 106.68 231.44Q106.68 232.98 106.27 234.52L103.6 243.64Q102.07 248.77 98.17 249.08Q78.48 250.31 58.79 249.08ZM136.11 215.65Q142.36 223.54 149.23 224.06Q154.98 224.57 156 228.36Q156.62 231.03 155.8 237.18Q155.08 243.33 153.64 246.21Q152.31 248.97 149.23 249.08Q137.03 249.08 126.47 235.75Q113.55 249.08 97.96 249.08Q93.45 248.97 92.33 243.44L90.48 234.93Q89.76 231.44 92.02 227.85Q94.27 224.26 97.96 223.95Q122.88 222.11 128.62 211.65Q130.37 208.47 132.62 208.47Q135.7 208.47 135.8 211.96Q136.01 215.34 136.11 215.65ZM109.76 283.94L119.91 268.76Q121.14 267.02 123.5 267.74Q132.11 270.81 138.88 276.76Q140.62 278.5 139.49 280.56L129.44 296.45Q127.8 298.6 125.65 296.96Q123.5 295.22 110.47 287.43Q108.32 286.09 109.76 283.94ZM149.03 249.08Q145.03 248.77 143.59 243.64L140.93 234.52Q138.98 226.11 146.06 224.26Q147.7 223.85 158.36 224.47Q169.02 224.98 179.48 224.47Q190.04 223.85 191.58 224.26Q196.81 225.49 196.92 231.44Q196.92 232.98 196.5 234.52L193.84 243.64Q192.3 248.77 188.4 249.08Q168.72 250.31 149.03 249.08Z" />
					<use id="fatha copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,59,65)"/>
					<use id="fathax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,39,70)"/>
					<use id="kesra copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,79,280)"/>
					<use id="kesrax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,59,295)"/>
					<use id="dama copy" style="display: none" href="#img3" transform="matrix(1,0,0,1,59,70)"/>
					<use id="damax2" style="display: none" href="#img4" transform="matrix(1,0,0,1,59,70)"/>
					<use id="shada_f copy" style="display: none" href="#img5" transform="matrix(1,0,0,1,49,50)"/>
					<use id="shada_f2 copy" style="display: none" href="#img6" transform="matrix(1,0,0,1,64,40)"/>
					<use id="shada_k copy" style="display: none" href="#img7" transform="matrix(1,0,0,1,44,60)"/>
					<use id="shada_k2 copy" style="display: none" href="#img8" transform="matrix(1,0,0,1,44,55)"/>
					<use id="shada_d copy" style="display: none" href="#img9" transform="matrix(1,0,0,1,64,65)"/>
					<use id="shada_d2" style="display: none" href="#img10" transform="matrix(1,0,0,1,59,65)"/>
					<use id="sukoon copy" style="display: none" href="#img11" transform="matrix(1,0,0,1,74,90)"/>
					<use id="shada" style="display: none" href="#img12" transform="matrix(1,0,0,1,59,100)"/>
				</g>
				<g id="baa_start" style="display: none">
					<path id="بــ " onclick="myFunction()" fill="#000000" d="M118.08 247.08Q81.89 248.72 45.79 247.08Q41.8 246.77 40.36 241.64L37.69 232.52Q35.75 224.21 42.72 222.36Q44.36 221.95 63.23 222.57Q82.2 223.18 100.86 222.57Q119.62 221.95 121.16 222.26Q128.13 224.11 126.08 232.52L123.42 241.64Q121.88 246.77 118.08 247.08ZM128.54 199.29L134.49 186.27Q137.67 179.3 140.03 183.5Q150.28 201.24 144.75 224.21Q139.31 247.08 117.78 247.08Q113.47 247.08 111.63 240.1Q109.88 233.03 109.98 228.72Q110.09 224.31 114.5 222.57Q116.03 221.95 117.78 221.95Q129.98 222.26 135.52 217.13Q134.39 211.91 130.49 207.7Q126.6 203.5 128.54 199.29ZM120.34 281.94L130.49 266.76Q131.72 265.02 134.08 265.74Q142.69 268.81 149.46 274.76Q151.21 276.5 150.08 278.56L140.03 294.45Q138.39 296.6 136.23 294.96Q134.08 293.22 121.06 285.43Q118.91 284.09 120.34 281.94Z" />
					<use id="fatha copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,57,70)"/>
					<use id="fathax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,37,70)"/>
					<use id="kesra copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,77,280)"/>
					<use id="kesrax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,47,295)"/>
					<use id="dama copy 2" style="display: none" href="#img3" transform="matrix(1,0,0,1,52,75)"/>
					<use id="damax2 copy" style="display: none" href="#img4" transform="matrix(1,0,0,1,52,70)"/>
					<use id="shada_f copy 2" style="display: none" href="#img5" transform="matrix(1,0,0,1,52,50)"/>
					<use id="shada_f2 copy 2" style="display: none" href="#img6" transform="matrix(1,0,0,1,77,50)"/>
					<use id="shada_k copy 2" style="display: none" href="#img7" transform="matrix(1,0,0,1,37,50)"/>
					<use id="shada_k2 copy 2" style="display: none" href="#img8" transform="matrix(1,0,0,1,47,50)"/>
					<use id="shada_d copy 2" style="display: none" href="#img9" transform="matrix(1,0,0,1,57,55)"/>
					<use id="shada_d2 copy" style="display: none" href="#img10" transform="matrix(1,0,0,1,47,55)"/>
					<use id="sukoon copy 2" style="display: none" href="#img11" transform="matrix(1,0,0,1,67,70)"/>
					<use id="shada copy" style="display: none" href="#img12" transform="matrix(1,0,0,1,52,90)"/>
				</g>
				<g id="baa_end" style="display: none">
					<path id="ـب " onclick="myFunction()" fill="#000000" d="M52.48 192.09Q55.56 187.99 58.12 190.45Q60.27 192.6 57.92 195.99Q51.15 205.52 52.79 211.88Q59.45 238.85 115.03 237.21Q154.51 236.08 186.4 223.06Q191.93 220.8 193.17 214.24Q193.88 210.24 197.37 210.14Q200.75 210.14 200.86 215.57Q201.06 222.24 214.8 222.95Q220.75 223.26 222.08 228.7Q222.59 230.75 221.98 237Q220.75 248.08 214.6 248.08Q205.16 248.08 196.75 236.69Q158.1 264.69 106.52 264.69Q53.1 264.79 43.56 237.62Q38.64 223.57 43.66 210.14Q48.38 198.04 52.48 192.09ZM106.42 293.19L116.57 278.02Q117.8 276.27 120.16 276.99Q128.77 280.07 135.54 286.02Q137.28 287.76 136.15 289.81L126.1 305.7Q124.46 307.86 122.31 306.22Q120.16 304.47 107.13 296.68Q104.98 295.35 106.42 293.19ZM214.39 248.08Q210.39 247.77 208.96 242.64L206.29 233.52Q204.34 225.11 211.42 223.26Q213.06 222.85 223.72 223.47Q234.39 223.98 244.84 223.47Q255.41 222.85 256.94 223.26Q262.17 224.49 262.28 230.44Q262.28 231.98 261.87 233.52L259.2 242.64Q257.66 247.77 253.77 248.08Q234.08 249.31 214.39 248.08Z" />
					<use id="fatha copy 3" style="display: none" href="#img1" transform="matrix(1,0,0,1,70,70)"/>
					<use id="fathax2 copy 3" style="display: none" href="#img2" transform="matrix(1,0,0,1,50,75)"/>
					<use id="kesra copy 3" style="display: none" href="#img1" transform="matrix(1,0,0,1,75,285)"/>
					<use id="kesrax2 copy 3" style="display: none" href="#img2" transform="matrix(1,0,0,1,50,305)"/>
					<use id="dama copy 3" style="display: none" href="#img3" transform="matrix(1,0,0,1,70,80)"/>
					<use id="damax2 copy 2" style="display: none" href="#img4" transform="matrix(1,0,0,1,70,80)"/>
					<use id="shada_f copy 3" style="display: none" href="#img5" transform="matrix(1,0,0,1,70,50)"/>
					<use id="shada_f2 copy 3" style="display: none" href="#img6" transform="matrix(1,0,0,1,80,55)"/>
					<use id="shada_k copy 3" style="display: none" href="#img7" transform="matrix(1,0,0,1,60,60)"/>
					<use id="shada_k2 copy 3" style="display: none" href="#img8" transform="matrix(1,0,0,1,60,60)"/>
					<use id="shada_d copy 3" style="display: none" href="#img9" transform="matrix(1,0,0,1,80,60)"/>
					<use id="shada_d2 copy 2" style="display: none" href="#img10" transform="matrix(1,0,0,1,70,60)"/>
					<use id="sukoon copy 3" style="display: none" href="#img11" transform="matrix(1,0,0,1,80,80)"/>
					<use id="shada copy 2" style="display: none" href="#img12" transform="matrix(1,0,0,1,70,80)"/>
				</g>

  </defs>
<!-- taa src file -->
  <defs>
    <g id="taa_byitsself" style="display: none">
      <path onclick="myFunction()" id="L03" fill="#000000" d="M126.28 229.52Q115.92 216.7 122.89 196.81Q125.76 188.81 133.87 179.68Q136.84 176.4 138.99 178.55Q141.04 180.61 138.27 183.58Q130.79 191.58 131.92 198.55Q135.92 222.75 194.98 222.75Q245.02 222.85 277.83 204.39Q276.09 196.7 268.5 190.14Q266.55 188.4 267.58 185.22L273.83 166.66Q275.78 160.92 280.29 167.89Q290.96 184.4 286.96 208.6Q284.91 220.49 277.93 224.9Q243.58 246.64 194.16 249.31Q144.43 251.97 126.28 229.52ZM203.08 147.69L209.64 137.95Q210.87 136.21 213.23 136.92Q221.84 140 228.61 145.95Q230.35 147.69 229.23 149.74L219.18 165.63Q217.54 167.79 215.49 166.25Q213.54 164.61 204.41 159.07L197.34 170.35Q195.7 172.5 193.54 170.86Q191.39 169.12 178.37 161.33Q176.21 160 177.65 157.84L187.8 142.67Q189.03 140.92 191.39 141.64Q197.75 143.9 203.08 147.69Z" />
      <use id="fatha" style="display: none" href="#img1" transform="matrix(1,0,0,1,158,51)"/>
      <use id="fathax2" style="display: none" href="#img2" transform="matrix(1,0,0,1,135,56)"/>
      <use id="kesra" style="display: none" href="#img1" transform="matrix(1,0,0,1,163,234)"/>
      <use id="kesrax2" style="display: none" href="#img2" transform="matrix(1,0,0,1,136,246)"/>
      <use id="dama" style="display: none" href="#img3" transform="matrix(1,0,0,1,150,53)"/>
      <use id="damax2" style="display: none" href="#img4" transform="matrix(1,0,0,1,155,38)"/>
      <use id="damax2-removebg-preview (1)" style="display: none" href="#img5" transform="matrix(1,0,0,1,156,41)"/>
      <use id="shada_f" style="display: none" href="#img6" transform="matrix(1,0,0,1,144,21)"/>
      <use id="shada_f2" style="display: none" href="#img7" transform="matrix(1,0,0,1,162,20)"/>
      <use id="shada_k" style="display: none" href="#img8" transform="matrix(1,0,0,1,136,33)"/>
      <use id="shada_k2" style="display: none" href="#img9" transform="matrix(1,0,0,1,138,26)"/>
      <use id="shada_d" style="display: none" href="#img10" transform="matrix(1,0,0,1,156,24)"/>
      <use id="sukoon" href="#img11" transform="matrix(1,0,0,1,156,40)"/>
    </g>
    <g id="taa_middle" style="display: none">
      <path id="ـتـ " fill="#000000" d="M130.79 249.08Q126.8 248.77 125.36 243.64L122.69 234.52Q120.75 226.11 127.82 224.26Q129.46 223.85 140.13 224.47Q150.79 224.98 161.25 224.47Q171.81 223.85 173.35 224.26Q178.58 225.59 178.68 231.44Q178.68 232.98 178.27 234.52L175.6 243.64Q174.07 248.67 170.17 249.08Q150.38 250.31 130.79 249.08ZM208.11 215.65Q214.36 223.54 221.23 224.06Q226.98 224.57 228 228.36Q228.62 231.03 227.8 237.18Q227.08 243.33 225.64 246.21Q224.31 248.97 221.23 249.08Q209.03 249.08 198.47 235.75Q185.55 249.08 169.96 249.08Q165.45 248.97 164.33 243.44L162.48 234.93Q161.76 231.44 164.02 227.85Q166.27 224.26 169.96 223.95Q194.88 222.11 200.62 211.65Q202.37 208.47 204.62 208.47Q207.7 208.47 207.8 211.96Q208.01 215.34 208.11 215.65ZM192.83 162.02L199.39 152.28Q200.62 150.54 202.98 151.25Q211.6 154.33 218.36 160.28Q220.11 162.02 218.98 164.07L208.93 179.96Q207.29 182.12 205.24 180.58Q203.29 178.94 194.16 173.4L187.09 184.68Q185.45 186.83 183.29 185.19Q181.14 183.45 168.12 175.66Q165.97 174.33 167.4 172.17L177.55 157Q178.78 155.25 181.14 155.97Q187.5 158.23 192.83 162.02ZM221.03 249.08Q217.03 248.77 215.59 243.64L212.93 234.52Q210.98 226.11 218.06 224.26Q219.7 223.85 230.36 224.47Q241.02 224.98 251.48 224.47Q262.04 223.85 263.58 224.26Q268.81 225.59 268.92 231.44Q268.92 232.98 268.5 234.52L265.84 243.64Q264.3 248.67 260.4 249.08Q240.61 250.31 221.03 249.08Z" />
      <use id="fatha copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,129,57)"/>
      <use id="fathax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,104,66)"/>
      <use id="kesra copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,148,247)"/>
      <use id="kesrax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,124,257)"/>
      <use id="dama copy" style="display: none" href="#img3" transform="matrix(1,0,0,1,122,55)"/>
      <use id="damax2" style="display: none" href="#img12" transform="matrix(1,0,0,1,103,56)"/>
      <use id="shada_f copy" style="display: none" href="#img6" transform="matrix(1,0,0,1,117,24)"/>
      <use id="shada_f2 copy" style="display: none" href="#img7" transform="matrix(1,0,0,1,135,23)"/>
      <use id="shada_k copy" style="display: none" href="#img8" transform="matrix(1,0,0,1,108,35)"/>
      <use id="shada_k2 copy" style="display: none" href="#img9" transform="matrix(1,0,0,1,109,27)"/>
      <use id="shada_d copy" style="display: none" href="#img10" transform="matrix(1,0,0,1,128,27)"/>
      <use id="shada_d2" style="display: none" href="#img13" transform="matrix(1,0,0,1,109,34)"/>
      <use id="sukoon copy" style="display: none" href="#img11" transform="matrix(1,0,0,1,136,40)"/>
      <use id="shada" style="display: none" href="#img14" transform="matrix(1,0,0,1,119,57)"/>
    </g>
    <g id="taa_start" style="display: none">
      <path id="تــ " fill="#000000" d="M195.08 247.08Q158.89 248.72 122.79 247.08Q118.69 246.77 117.36 241.64L114.69 232.52Q112.75 224.21 119.72 222.36Q121.36 221.95 140.33 222.57Q159.2 223.18 177.86 222.57Q196.62 221.95 198.16 222.26Q205.24 224 203.08 232.52L200.42 241.64Q198.88 246.77 195.08 247.08ZM205.54 199.29L211.49 186.27Q214.67 179.3 217.03 183.5Q227.28 201.24 221.75 224.21Q216.31 247.08 194.78 247.08Q190.47 247.08 188.63 240.1Q186.88 233.03 186.98 228.72Q187.09 224.31 191.5 222.57Q193.03 221.95 194.78 221.95Q206.98 222.26 212.52 217.13Q211.39 211.91 207.49 207.7Q203.6 203.5 205.54 199.29ZM211.49 153.87L218.05 144.13Q219.28 142.38 221.64 143.1Q230.26 146.18 237.02 152.13Q238.77 153.87 237.64 155.92L227.59 171.81Q225.95 173.97 223.9 172.43Q221.95 170.79 212.82 165.25L205.75 176.53Q204.11 178.68 201.96 177.04Q199.8 175.3 186.78 167.51Q184.63 166.17 186.06 164.02L196.21 148.84Q197.44 147.1 199.8 147.82Q206.16 150.07 211.49 153.87Z" />
      <use id="fatha copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,129,57)"/>
      <use id="fathax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,104,66)"/>
      <use id="kesra copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,148,247)"/>
      <use id="kesrax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,124,257)"/>
      <use id="dama copy 2" style="display: none" href="#img3" transform="matrix(1,0,0,1,122,55)"/>
      <use id="damax2 copy" style="display: none" href="#img12" transform="matrix(1,0,0,1,103,56)"/>
      <use id="shada_f copy 2" style="display: none" href="#img6" transform="matrix(1,0,0,1,117,24)"/>
      <use id="shada_f2 copy 2" style="display: none" href="#img7" transform="matrix(1,0,0,1,135,23)"/>
      <use id="shada_k copy 2" style="display: none" href="#img8" transform="matrix(1,0,0,1,108,35)"/>
      <use id="shada_k2 copy 2" style="display: none" href="#img9" transform="matrix(1,0,0,1,109,27)"/>
      <use id="shada_d copy 2" style="display: none" href="#img10" transform="matrix(1,0,0,1,128,27)"/>
      <use id="shada_d2 copy" style="display: none" href="#img13" transform="matrix(1,0,0,1,109,34)"/>
      <use id="sukoon copy 2" style="display: none" href="#img11" transform="matrix(1,0,0,1,136,40)"/>
      <use id="shada copy" style="display: none" href="#img14" transform="matrix(1,0,0,1,119,57)"/>
    </g>
    <g id="taa_end">
      <path id="ـت " fill="#000000" d="M129.48 192.09Q132.56 187.99 135.12 190.45Q137.27 192.6 134.92 195.99Q128.15 205.52 129.79 211.88Q136.45 238.85 192.03 237.21Q231.51 236.08 263.4 223.06Q268.93 220.8 270.17 214.24Q270.88 210.24 274.37 210.14Q277.75 210.14 277.86 215.57Q278.06 222.24 291.8 222.95Q297.75 223.26 299.08 228.7Q299.59 230.75 298.98 237Q297.75 248.08 291.6 248.08Q282.16 248.08 273.75 236.69Q235.1 264.69 183.52 264.69Q130.1 264.79 120.56 237.62Q115.64 223.57 120.66 210.14Q125.38 198.04 129.48 192.09ZM202.08 147.69L208.64 137.95Q209.87 136.21 212.23 136.92Q220.84 140 227.61 145.95Q229.35 147.69 228.23 149.74L218.18 165.63Q216.54 167.79 214.49 166.25Q212.54 164.61 203.41 159.07L196.34 170.35Q194.7 172.5 192.54 170.86Q190.39 169.12 177.37 161.33Q175.21 160 176.65 157.84L186.8 142.67Q188.03 140.92 190.39 141.64Q196.75 143.9 202.08 147.69ZM291.39 248.08Q287.39 247.77 285.96 242.64L283.29 233.52Q281.34 225.11 288.42 223.26Q290.06 222.85 300.72 223.47Q311.39 223.98 321.84 223.47Q332.41 222.85 333.94 223.26Q339.17 224.59 339.28 230.44Q339.28 231.98 338.87 233.52L336.2 242.64Q334.66 247.67 330.77 248.08Q310.98 249.31 291.39 248.08Z" />
      <use id="fatha copy 3" style="display: none" href="#img1" transform="matrix(1,0,0,1,129,57)"/>
      <use id="fathax2 copy 3" style="display: none" href="#img2" transform="matrix(1,0,0,1,104,66)"/>
      <use id="kesra copy 3" style="display: none" href="#img1" transform="matrix(1,0,0,1,148,247)"/>
      <use id="kesrax2 copy 3" style="display: none" href="#img2" transform="matrix(1,0,0,1,128,258)"/>
      <use id="dama copy 3" style="display: none" href="#img3" transform="matrix(1,0,0,1,122,55)"/>
      <use id="damax2 copy 2" style="display: none" href="#img12" transform="matrix(1,0,0,1,103,56)"/>
      <use id="shada_f copy 3" style="display: none" href="#img6" transform="matrix(1,0,0,1,117,24)"/>
      <use id="shada_f2 copy 3" style="display: none" href="#img7" transform="matrix(1,0,0,1,135,23)"/>
      <use id="shada_k copy 3" style="display: none" href="#img8" transform="matrix(1,0,0,1,108,35)"/>
      <use id="shada_k2 copy 3" style="display: none" href="#img9" transform="matrix(1,0,0,1,109,27)"/>
      <use id="shada_d copy 3" style="display: none" href="#img10" transform="matrix(1,0,0,1,128,27)"/>
      <use id="shada_d2 copy 2" style="display: none" href="#img13" transform="matrix(1,0,0,1,109,34)"/>
      <use id="sukoon copy 3" style="display: none" href="#img11" transform="matrix(1,0,0,1,136,40)"/>
      <use id="shada copy 2" style="display: none" href="#img14" transform="matrix(1,0,0,1,119,57)"/>
    </g>
  </defs>

  <!-- haraka src file -->
  <svg id="Harakat" display ="none">
    <defs>
      <path onclick="myFunction()" id= "H01" transform="translate(0.000000,103.000000) scale(0.100000,-0.100000)" d="M420 580 c-124 -77 -235 -152 -248 -166 -39 -45 -20 -134 26 -117 25 9 380 212 428 245 44 29 74 90 74 150 0 53 -40 37 -280 -112z"/>
    </defs>
  </svg>




  <div class="box1 mr-5 ml-5 mt-3 mb-3">

    <!-- keyboard settings -->
    <div class="container-fluid  text-center mt-1">
      <div class="row mt-2 ml-5">

        <div class="col">
          <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Settings
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Font</a>
              <a class="dropdown-item" href="#">Color</a>
              <a class="dropdown-item" href="#">Size</a>
              <a class="dropdown-item" href="#">Word</a>
            </div>
          </div>
        </div>

        <div class="col"></div>

        <div class="col"></div>

        <div class="col"></div>

        <div class="col"></div>

        <div class="col mr-5">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-success">Arabic</button>
            <button type="button" class="btn btn-success">English</button>
          </div>
        </div>

      </div>
    </div>
    
    <div class="container-fluid text-center row pr-3 pl-3 pb-2 pt-2">
       <!-- keyboard numbers-->
       <div class="col-2 text-center">
        <p class="text-center "><b>Numbers</b></p>
        <div class="container text-center"> 
          <img src="./number_images/zero.svg" class="box" />
          <img src="./number_images/one.svg" class="box" />
          <img src="./number_images/twi.svg" class="box" />
          <img src="./number_images/three.svg" class="box" />
          <img src="./number_images/four.svg" class="box" />
          <img src="./number_images/five.svg" class="box" />
          <img src="./number_images/six.svg" class="box" />
          <img src="./number_images/seven.svg" class="box" />
          <img src="./number_images/eight.svg" class="box" />      
        </div>
      </div>
      <!-- keyboard symbols-->
      <div class="col-3 text-center">
        <p class="text-center "><b>Symbols</b></p>
        <div class="container text-center"> 
          <img id="harak1" src="./harakat_images/H31.svg" class="box" onclick="harakaImg('harak1')"/>
          <img id="harak2" src="./harakat_images/H11.svg" class="box" onclick="harakaImg('harak2')"/>
          <img id="harak3" src="./harakat_images/H13.svg" class="box" onclick="harakaImg('harak3')"/>
          <img id="harak4" src="./harakat_images/H14.svg" class="box" />
          <img id="harak5" src="./harakat_images/H21.svg" class="box" />
          <img id="harak6" src="./harakat_images/H22.svg" class="box" onclick="harakaImg('harak1')"/>
          <img id="harak7" src="./harakat_images/H23.svg" class="box" onclick="harakaImg('harak2')"/>
          <img id="harak8" src="./harakat_images/H24.svg" class="box" onclick="harakaImg('harak3')"/>
          <img id="harak9" src="./harakat_images/H31.svg" class="box" />
          <img id="harak10" src="./harakat_images/H32.svg" class="box" />
          <img id="harak11" src="./harakat_images/H33.svg" class="box" onclick="harakaImg('harak1')"/>
          <img id="harak12" src="./harakat_images/H11.svg" class="box" onclick="harakaImg('harak2')"/>
          <img id="harak13" src="./harakat_images/H4.svg" class="box" onclick="harakaImg('harak3')"/>
        </div>
      </div>
      <!-- keyboard vowels-->
      <div class="col-md-3 text-center">
        <p class="text-center "><b>Vowels</b></p>
        <div class="container text-center">

          <svg id= "iH1"   viewBox="-25 -50 120 170" class="box"  onclick="HarakaSelection('H01')"   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <use id="iH01" width="400" height="400"  href="#H01">
          </svg>
		    </svg>

          <img id="harak2" src="./harakat_images/H11.svg" class="box" onclick="harakaImg('harak2')"/>
          <img id="harak3" src="./harakat_images/H13.svg" class="box" onclick="harakaImg('harak3')"/>
          <img id="harak4" src="./harakat_images/H14.svg" class="box" />
          <img id="harak5" src="./harakat_images/H21.svg" class="box" />
          <img id="harak6" src="./harakat_images/H22.svg" class="box" onclick="harakaImg('harak1')"/>
          <img id="harak7" src="./harakat_images/H23.svg" class="box" onclick="harakaImg('harak2')"/>
          <img id="harak8" src="./harakat_images/H24.svg" class="box" onclick="harakaImg('harak3')"/>
          <img id="harak9" src="./harakat_images/H31.svg" class="box" />
          <img id="harak10" src="./harakat_images/H32.svg" class="box" />
          <img id="harak11" src="./harakat_images/H33.svg" class="box" onclick="harakaImg('harak1')"/>
          <img id="harak12" src="./harakat_images/H11.svg" class="box" onclick="harakaImg('harak2')"/>
          <img id="harak13" src="./harakat_images/H4.svg" class="box" onclick="harakaImg('harak3')"/>
        </div>
      </div>
       <!-- keyboard letters-->
      <div class="col-4 text-center">
        <p class="text-center"><b>Consones</b></p>
         
          <!-- letter baa -->
          <svg preserveAspectRatio="none" class="box dropdown-toggle" data-toggle="dropdown"  aria-expanded="true" id= "L02"  width= "50" height="50" viewBox="0 50 250 300" onclick="LetterOptions('L2')"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
            <path id="L2"  stroke-width="3" opacity="1" d="M49.28 229.52Q38.92 216.7 45.89 196.81Q48.76 188.81 56.87 179.68Q59.84 176.4 61.99 178.55Q64.04 180.61 61.27 183.58Q53.79 191.58 54.92 198.55Q58.92 222.75 117.98 222.75Q168.02 222.85 200.83 204.39Q199.09 196.7 191.5 190.14Q189.55 188.4 190.58 185.22L196.83 166.66Q198.78 160.92 203.29 167.89Q213.96 184.4 209.96 208.6Q207.91 220.49 200.93 224.9Q166.58 246.64 117.16 249.31Q67.43 251.97 49.28 229.52ZM117.67 288.07L127.82 272.89Q129.05 271.15 131.41 271.87Q140.02 274.94 146.79 280.89Q148.54 282.63 147.41 284.68L137.36 300.58Q135.72 302.73 133.56 301.09Q131.41 299.35 118.39 291.55Q116.24 290.22 117.67 288.07Z" />
          </svg>
          <!-- dropdown for baa options -->  
          <div class="dropdown-menu dropright" style="background-color:#66CF96; padding-left:10px; padding-right:10px">
            <svg class="box"  id= "iL23"  x="20" y="40" width="100" height="100" viewBox="0 0 400 400" onclick="LetterSelection('L23')" style="background-color: rgb(241, 241, 194);" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L23" display= "none" fill="#000000" d="M52.48 192.09Q55.56 187.99 58.12 190.45Q60.27 192.6 57.92 195.99Q51.15 205.52 52.79 211.88Q59.45 238.85 115.03 237.21Q154.51 236.08 186.4 223.06Q191.93 220.8 193.17 214.24Q193.88 210.24 197.37 210.14Q200.75 210.14 200.86 215.57Q201.06 222.24 214.8 222.95Q220.75 223.26 222.08 228.7Q222.59 230.75 221.98 237Q220.75 248.08 214.6 248.08Q205.16 248.08 196.75 236.69Q158.1 264.69 106.52 264.69Q53.1 264.79 43.56 237.62Q38.64 223.57 43.66 210.14Q48.38 198.04 52.48 192.09ZM106.42 293.19L116.57 278.02Q117.8 276.27 120.16 276.99Q128.77 280.07 135.54 286.02Q137.28 287.76 136.15 289.81L126.1 305.7Q124.46 307.86 122.31 306.22Q120.16 304.47 107.13 296.68Q104.98 295.35 106.42 293.19ZM214.39 248.08Q210.39 247.77 208.96 242.64L206.29 233.52Q204.34 225.11 211.42 223.26Q213.06 222.85 223.72 223.47Q234.39 223.98 244.84 223.47Q255.41 222.85 256.94 223.26Q262.17 224.49 262.28 230.44Q262.28 231.98 261.87 233.52L259.2 242.64Q257.66 247.77 253.77 248.08Q234.08 249.31 214.39 248.08Z" >
                <use id="L23h01" style="display: none" href="#H01" transform="matrix(1,0,0,1,70,70)"/>
                <use id="L23h02" style="display: none" href="#img2" transform="matrix(1,0,0,1,50,75)"/>
                <use id="L23h09" style="display: none" href="#img1" transform="matrix(1,0,0,1,75,285)"/>
                <use id="L23h10" style="display: none" href="#img2" transform="matrix(1,0,0,1,50,305)"/>
                <use id="L23h05" style="display: none" href="#img3" transform="matrix(1,0,0,1,70,80)"/>
                <use id="L23h06" style="display: none" href="#img4" transform="matrix(1,0,0,1,70,80)"/>
                <use id="L23h03" style="display: none" href="#img5" transform="matrix(1,0,0,1,70,50)"/>
                <use id="L23h04" style="display: none" href="#img6" transform="matrix(1,0,0,1,80,55)"/>
                <use id="L23h11" style="display: none" href="#img7" transform="matrix(1,0,0,1,60,60)"/>
                <use id="L23h12" style="display: none" href="#img8" transform="matrix(1,0,0,1,60,60)"/>
                <use id="L23h07" style="display: none" href="#img9" transform="matrix(1,0,0,1,80,60)"/>
                <use id="L23h08" style="display: none" href="#img10" transform="matrix(1,0,0,1,70,60)"/>
                <use id="L23h13" style="display: none" href="#img11" transform="matrix(1,0,0,1,80,80)"/>
                <use id="L23h14" style="display: none" href="#img12" transform="matrix(1,0,0,1,70,80)"/>
            </svg>
            <svg class="box" id= "iL22" x="60" y="40"  width="60" height="60" viewBox="0 0 400 400" onclick="LetterSelection('L22')" style="background-color: rgb(241, 241, 194);" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L22" display= "none" fill="#000000" d="M58.79 249.08Q54.8 248.77 53.36 243.64L50.69 234.52Q48.75 226.11 55.82 224.26Q57.46 223.85 68.13 224.47Q78.79 224.98 89.25 224.47Q99.81 223.85 101.35 224.26Q106.58 225.49 106.68 231.44Q106.68 232.98 106.27 234.52L103.6 243.64Q102.07 248.77 98.17 249.08Q78.48 250.31 58.79 249.08ZM136.11 215.65Q142.36 223.54 149.23 224.06Q154.98 224.57 156 228.36Q156.62 231.03 155.8 237.18Q155.08 243.33 153.64 246.21Q152.31 248.97 149.23 249.08Q137.03 249.08 126.47 235.75Q113.55 249.08 97.96 249.08Q93.45 248.97 92.33 243.44L90.48 234.93Q89.76 231.44 92.02 227.85Q94.27 224.26 97.96 223.95Q122.88 222.11 128.62 211.65Q130.37 208.47 132.62 208.47Q135.7 208.47 135.8 211.96Q136.01 215.34 136.11 215.65ZM109.76 283.94L119.91 268.76Q121.14 267.02 123.5 267.74Q132.11 270.81 138.88 276.76Q140.62 278.5 139.49 280.56L129.44 296.45Q127.8 298.6 125.65 296.96Q123.5 295.22 110.47 287.43Q108.32 286.09 109.76 283.94ZM149.03 249.08Q145.03 248.77 143.59 243.64L140.93 234.52Q138.98 226.11 146.06 224.26Q147.7 223.85 158.36 224.47Q169.02 224.98 179.48 224.47Q190.04 223.85 191.58 224.26Q196.81 225.49 196.92 231.44Q196.92 232.98 196.5 234.52L193.84 243.64Q192.3 248.77 188.4 249.08Q168.72 250.31 149.03 249.08Z" />
                  <use id="fatha copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,59,65)"/>
                  <use id="fathax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,39,70)"/>
                  <use id="kesra copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,79,280)"/>
                  <use id="kesrax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,59,295)"/>
                  <use id="dama copy" style="display: none" href="#img3" transform="matrix(1,0,0,1,59,70)"/>
                  <use id="damax2" style="display: none" href="#img4" transform="matrix(1,0,0,1,59,70)"/>
                  <use id="shada_f copy" style="display: none" href="#img5" transform="matrix(1,0,0,1,49,50)"/>
                  <use id="shada_f2 copy" style="display: none" href="#img6" transform="matrix(1,0,0,1,64,40)"/>
                  <use id="shada_k copy" style="display: none" href="#img7" transform="matrix(1,0,0,1,44,60)"/>
                  <use id="shada_k2 copy" style="display: none" href="#img8" transform="matrix(1,0,0,1,44,55)"/>
                  <use id="shada_d copy" style="display: none" href="#img9" transform="matrix(1,0,0,1,64,65)"/>
                  <use id="shada_d2" style="display: none" href="#img10" transform="matrix(1,0,0,1,59,65)"/>
                  <use id="sukoon copy" style="display: none" href="#img11" transform="matrix(1,0,0,1,74,90)"/>
                  <use id="shada" style="display: none" href="#img12" transform="matrix(1,0,0,1,59,100)"/>
            </svg>
            <svg class="box" id= "iL21" x="100" y="40" width="60" height="60" viewBox="0 0 400 400" onclick="LetterSelection('L21')" style="background-color: rgb(241, 241, 194);" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L21" display= "none" fill="#000000" d="M118.08 247.08Q81.89 248.72 45.79 247.08Q41.8 246.77 40.36 241.64L37.69 232.52Q35.75 224.21 42.72 222.36Q44.36 221.95 63.23 222.57Q82.2 223.18 100.86 222.57Q119.62 221.95 121.16 222.26Q128.13 224.11 126.08 232.52L123.42 241.64Q121.88 246.77 118.08 247.08ZM128.54 199.29L134.49 186.27Q137.67 179.3 140.03 183.5Q150.28 201.24 144.75 224.21Q139.31 247.08 117.78 247.08Q113.47 247.08 111.63 240.1Q109.88 233.03 109.98 228.72Q110.09 224.31 114.5 222.57Q116.03 221.95 117.78 221.95Q129.98 222.26 135.52 217.13Q134.39 211.91 130.49 207.7Q126.6 203.5 128.54 199.29ZM120.34 281.94L130.49 266.76Q131.72 265.02 134.08 265.74Q142.69 268.81 149.46 274.76Q151.21 276.5 150.08 278.56L140.03 294.45Q138.39 296.6 136.23 294.96Q134.08 293.22 121.06 285.43Q118.91 284.09 120.34 281.94Z" />
                  <use id="fatha copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,57,70)"/>
                  <use id="fathax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,37,70)"/>
                  <use id="kesra copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,77,280)"/>
                  <use id="kesrax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,47,295)"/>
                  <use id="dama copy 2" style="display: none" href="#img3" transform="matrix(1,0,0,1,52,75)"/>
                  <use id="damax2 copy" style="display: none" href="#img4" transform="matrix(1,0,0,1,52,70)"/>
                  <use id="shada_f copy 2" style="display: none" href="#img5" transform="matrix(1,0,0,1,52,50)"/>
                  <use id="shada_f2 copy 2" style="display: none" href="#img6" transform="matrix(1,0,0,1,77,50)"/>
                  <use id="shada_k copy 2" style="display: none" href="#img7" transform="matrix(1,0,0,1,37,50)"/>
                  <use id="shada_k2 copy 2" style="display: none" href="#img8" transform="matrix(1,0,0,1,47,50)"/>
                  <use id="shada_d copy 2" style="display: none" href="#img9" transform="matrix(1,0,0,1,57,55)"/>
                  <use id="shada_d2 copy" style="display: none" href="#img10" transform="matrix(1,0,0,1,47,55)"/>
                  <use id="sukoon copy 2" style="display: none" href="#img11" transform="matrix(1,0,0,1,67,70)"/>
                  <use id="shada copy" style="display: none" href="#img12" transform="matrix(1,0,0,1,52,90)"/>
                
            </svg>
            <svg class="box" id= "iL20" x="140" y="40" width="60" height="60" viewBox="0 0 400 400" onclick="LetterSelection('L20')" style="background-color: rgb(241, 241, 194);" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L20" display= "none" fill="#000000" d="M49.28 229.52Q38.92 216.7 45.89 196.81Q48.76 188.81 56.87 179.68Q59.84 176.4 61.99 178.55Q64.04 180.61 61.27 183.58Q53.79 191.58 54.92 198.55Q58.92 222.75 117.98 222.75Q168.02 222.85 200.83 204.39Q199.09 196.7 191.5 190.14Q189.55 188.4 190.58 185.22L196.83 166.66Q198.78 160.92 203.29 167.89Q213.96 184.4 209.96 208.6Q207.91 220.49 200.93 224.9Q166.58 246.64 117.16 249.31Q67.43 251.97 49.28 229.52ZM117.67 288.07L127.82 272.89Q129.05 271.15 131.41 271.87Q140.02 274.94 146.79 280.89Q148.54 282.63 147.41 284.68L137.36 300.58Q135.72 302.73 133.56 301.09Q131.41 299.35 118.39 291.55Q116.24 290.22 117.67 288.07Z" />
                  <use id="fatha" href="#img1" transform="matrix(1,0,0,1,83,60)"/>
                  <use id="fathax2" href="#img2" transform="matrix(1,0,0,1,58,60)"/>
                  <use id="kesra" href="#img1" transform="matrix(1,0,0,1,88,280)"/>
                  <use id="kesrax2" href="#img2" transform="matrix(1,0,0,1,68,295)"/>
                  <use id="dama" href="#img3" transform="matrix(1,0,0,1,73,60)"/>
                  <use id="DAMAX2" href="#img4" transform="matrix(1,0,0,1,73,60)"/>
                  <use id="shada_f" href="#img5" transform="matrix(1,0,0,1,68,40)"/>
                  <use id="shada_f2" href="#img6" transform="matrix(1,0,0,1,88,45)"/>
                  <use id="shada_k" href="#img7" transform="matrix(1,0,0,1,63,40)"/>
                  <use id="shada_k2" href="#img8" transform="matrix(1,0,0,1,63,40)"/>
                  <use id="shada_d" href="#img9" transform="matrix(1,0,0,1,83,40)"/>
                  <use id="H34" href="#img10" transform="matrix(1,0,0,1,68,60)"/>
                  <use id="sukoon" href="#img11" transform="matrix(1,0,0,1,83,70)"/>
                  <use id="H5" href="#img12" transform="matrix(1,0,0,1,73,81)"/>
            </svg>
          </div>




          <!-- letter taa -->
          <svg preserveAspectRatio="none" class="box dropdown-toggle" data-toggle="dropdown"  aria-expanded="true" id= "L03"  width= "50" height="50" viewBox="0 0 400 400" onclick="LetterOptions('L3')"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
            <path onclick="myFunction()" id="L03" fill="#000000" d="M126.28 229.52Q115.92 216.7 122.89 196.81Q125.76 188.81 133.87 179.68Q136.84 176.4 138.99 178.55Q141.04 180.61 138.27 183.58Q130.79 191.58 131.92 198.55Q135.92 222.75 194.98 222.75Q245.02 222.85 277.83 204.39Q276.09 196.7 268.5 190.14Q266.55 188.4 267.58 185.22L273.83 166.66Q275.78 160.92 280.29 167.89Q290.96 184.4 286.96 208.6Q284.91 220.49 277.93 224.9Q243.58 246.64 194.16 249.31Q144.43 251.97 126.28 229.52ZM203.08 147.69L209.64 137.95Q210.87 136.21 213.23 136.92Q221.84 140 228.61 145.95Q230.35 147.69 229.23 149.74L219.18 165.63Q217.54 167.79 215.49 166.25Q213.54 164.61 204.41 159.07L197.34 170.35Q195.7 172.5 193.54 170.86Q191.39 169.12 178.37 161.33Q176.21 160 177.65 157.84L187.8 142.67Q189.03 140.92 191.39 141.64Q197.75 143.9 203.08 147.69Z" />
          </svg>
          <!-- dropdown for taa options -->  
          <div class="dropdown-menu dropright" style="background-color:darkseagreen; padding-left:10px; padding-right:10px">
            <svg class="box"  id= "iL24"  x="20" y="40" width="100" height="100" viewBox="0 0 400 400" onclick="LetterSelection('L24)" style="background-color:darkseagreen" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L24" fill="#000000" d="M126.28 229.52Q115.92 216.7 122.89 196.81Q125.76 188.81 133.87 179.68Q136.84 176.4 138.99 178.55Q141.04 180.61 138.27 183.58Q130.79 191.58 131.92 198.55Q135.92 222.75 194.98 222.75Q245.02 222.85 277.83 204.39Q276.09 196.7 268.5 190.14Q266.55 188.4 267.58 185.22L273.83 166.66Q275.78 160.92 280.29 167.89Q290.96 184.4 286.96 208.6Q284.91 220.49 277.93 224.9Q243.58 246.64 194.16 249.31Q144.43 251.97 126.28 229.52ZM203.08 147.69L209.64 137.95Q210.87 136.21 213.23 136.92Q221.84 140 228.61 145.95Q230.35 147.69 229.23 149.74L219.18 165.63Q217.54 167.79 215.49 166.25Q213.54 164.61 204.41 159.07L197.34 170.35Q195.7 172.5 193.54 170.86Q191.39 169.12 178.37 161.33Q176.21 160 177.65 157.84L187.8 142.67Q189.03 140.92 191.39 141.64Q197.75 143.9 203.08 147.69Z" />
                <use id="L24h01" id="fatha" style="display: none" href="#img1" transform="matrix(1,0,0,1,158,51)"/>
                <use id="fathax2" style="display: none" href="#img2" transform="matrix(1,0,0,1,135,56)"/>
                <use id="kesra" style="display: none" href="#img1" transform="matrix(1,0,0,1,163,234)"/>
                <use id="kesrax2" style="display: none" href="#img2" transform="matrix(1,0,0,1,136,246)"/>
                <use id="dama" style="display: none" href="#img3" transform="matrix(1,0,0,1,150,53)"/>
                <use id="damax2" style="display: none" href="#img4" transform="matrix(1,0,0,1,155,38)"/>
                <use id="damax2-removebg-preview (1)" style="display: none" href="#img5" transform="matrix(1,0,0,1,156,41)"/>
                <use id="shada_f" style="display: none" href="#img6" transform="matrix(1,0,0,1,144,21)"/>
                <use id="shada_f2" style="display: none" href="#img7" transform="matrix(1,0,0,1,162,20)"/>
                <use id="shada_k" style="display: none" href="#img8" transform="matrix(1,0,0,1,136,33)"/>
                <use id="shada_k2" style="display: none" href="#img9" transform="matrix(1,0,0,1,138,26)"/>
                <use id="shada_d" style="display: none" href="#img10" transform="matrix(1,0,0,1,156,24)"/>
                <use id="sukoon" href="#img11" transform="matrix(1,0,0,1,156,40)"/>
            </svg>
            <svg class="box" id= "iL22" x="60" y="40"  width="60" height="60" viewBox="0 0 400 400" onclick="LetterSelection('L22')" style="background-color:darkseagreen" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L22" display= "none" fill="#000000" d="M58.79 249.08Q54.8 248.77 53.36 243.64L50.69 234.52Q48.75 226.11 55.82 224.26Q57.46 223.85 68.13 224.47Q78.79 224.98 89.25 224.47Q99.81 223.85 101.35 224.26Q106.58 225.49 106.68 231.44Q106.68 232.98 106.27 234.52L103.6 243.64Q102.07 248.77 98.17 249.08Q78.48 250.31 58.79 249.08ZM136.11 215.65Q142.36 223.54 149.23 224.06Q154.98 224.57 156 228.36Q156.62 231.03 155.8 237.18Q155.08 243.33 153.64 246.21Q152.31 248.97 149.23 249.08Q137.03 249.08 126.47 235.75Q113.55 249.08 97.96 249.08Q93.45 248.97 92.33 243.44L90.48 234.93Q89.76 231.44 92.02 227.85Q94.27 224.26 97.96 223.95Q122.88 222.11 128.62 211.65Q130.37 208.47 132.62 208.47Q135.7 208.47 135.8 211.96Q136.01 215.34 136.11 215.65ZM109.76 283.94L119.91 268.76Q121.14 267.02 123.5 267.74Q132.11 270.81 138.88 276.76Q140.62 278.5 139.49 280.56L129.44 296.45Q127.8 298.6 125.65 296.96Q123.5 295.22 110.47 287.43Q108.32 286.09 109.76 283.94ZM149.03 249.08Q145.03 248.77 143.59 243.64L140.93 234.52Q138.98 226.11 146.06 224.26Q147.7 223.85 158.36 224.47Q169.02 224.98 179.48 224.47Q190.04 223.85 191.58 224.26Q196.81 225.49 196.92 231.44Q196.92 232.98 196.5 234.52L193.84 243.64Q192.3 248.77 188.4 249.08Q168.72 250.31 149.03 249.08Z" />
                  <use id="fatha copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,59,65)"/>
                  <use id="fathax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,39,70)"/>
                  <use id="kesra copy" style="display: none" href="#img1" transform="matrix(1,0,0,1,79,280)"/>
                  <use id="kesrax2 copy" style="display: none" href="#img2" transform="matrix(1,0,0,1,59,295)"/>
                  <use id="dama copy" style="display: none" href="#img3" transform="matrix(1,0,0,1,59,70)"/>
                  <use id="damax2" style="display: none" href="#img4" transform="matrix(1,0,0,1,59,70)"/>
                  <use id="shada_f copy" style="display: none" href="#img5" transform="matrix(1,0,0,1,49,50)"/>
                  <use id="shada_f2 copy" style="display: none" href="#img6" transform="matrix(1,0,0,1,64,40)"/>
                  <use id="shada_k copy" style="display: none" href="#img7" transform="matrix(1,0,0,1,44,60)"/>
                  <use id="shada_k2 copy" style="display: none" href="#img8" transform="matrix(1,0,0,1,44,55)"/>
                  <use id="shada_d copy" style="display: none" href="#img9" transform="matrix(1,0,0,1,64,65)"/>
                  <use id="shada_d2" style="display: none" href="#img10" transform="matrix(1,0,0,1,59,65)"/>
                  <use id="sukoon copy" style="display: none" href="#img11" transform="matrix(1,0,0,1,74,90)"/>
                  <use id="shada" style="display: none" href="#img12" transform="matrix(1,0,0,1,59,100)"/>
            </svg>
            <svg class="box" id= "iL31" x="100" y="40" width="60" height="60" viewBox="0 0 400 400" onclick="LetterSelection('L21')" style="background-color:darkseagreen" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L31" display= "none" fill="#000000" d="M118.08 247.08Q81.89 248.72 45.79 247.08Q41.8 246.77 40.36 241.64L37.69 232.52Q35.75 224.21 42.72 222.36Q44.36 221.95 63.23 222.57Q82.2 223.18 100.86 222.57Q119.62 221.95 121.16 222.26Q128.13 224.11 126.08 232.52L123.42 241.64Q121.88 246.77 118.08 247.08ZM128.54 199.29L134.49 186.27Q137.67 179.3 140.03 183.5Q150.28 201.24 144.75 224.21Q139.31 247.08 117.78 247.08Q113.47 247.08 111.63 240.1Q109.88 233.03 109.98 228.72Q110.09 224.31 114.5 222.57Q116.03 221.95 117.78 221.95Q129.98 222.26 135.52 217.13Q134.39 211.91 130.49 207.7Q126.6 203.5 128.54 199.29ZM120.34 281.94L130.49 266.76Q131.72 265.02 134.08 265.74Q142.69 268.81 149.46 274.76Q151.21 276.5 150.08 278.56L140.03 294.45Q138.39 296.6 136.23 294.96Q134.08 293.22 121.06 285.43Q118.91 284.09 120.34 281.94Z" />
                  <use id="fatha copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,57,70)"/>
                  <use id="fathax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,37,70)"/>
                  <use id="kesra copy 2" style="display: none" href="#img1" transform="matrix(1,0,0,1,77,280)"/>
                  <use id="kesrax2 copy 2" style="display: none" href="#img2" transform="matrix(1,0,0,1,47,295)"/>
                  <use id="dama copy 2" style="display: none" href="#img3" transform="matrix(1,0,0,1,52,75)"/>
                  <use id="damax2 copy" style="display: none" href="#img4" transform="matrix(1,0,0,1,52,70)"/>
                  <use id="shada_f copy 2" style="display: none" href="#img5" transform="matrix(1,0,0,1,52,50)"/>
                  <use id="shada_f2 copy 2" style="display: none" href="#img6" transform="matrix(1,0,0,1,77,50)"/>
                  <use id="shada_k copy 2" style="display: none" href="#img7" transform="matrix(1,0,0,1,37,50)"/>
                  <use id="shada_k2 copy 2" style="display: none" href="#img8" transform="matrix(1,0,0,1,47,50)"/>
                  <use id="shada_d copy 2" style="display: none" href="#img9" transform="matrix(1,0,0,1,57,55)"/>
                  <use id="shada_d2 copy" style="display: none" href="#img10" transform="matrix(1,0,0,1,47,55)"/>
                  <use id="sukoon copy 2" style="display: none" href="#img11" transform="matrix(1,0,0,1,67,70)"/>
                  <use id="shada copy" style="display: none" href="#img12" transform="matrix(1,0,0,1,52,90)"/>
                
            </svg>
            <svg class="box" id= "iL20" x="140" y="40" width="60" height="60" viewBox="0 0 400 400" onclick="LetterSelection('L20')" style="background-color:darkseagreen" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
              <path id="L20" display= "none" fill="#000000" d="M49.28 229.52Q38.92 216.7 45.89 196.81Q48.76 188.81 56.87 179.68Q59.84 176.4 61.99 178.55Q64.04 180.61 61.27 183.58Q53.79 191.58 54.92 198.55Q58.92 222.75 117.98 222.75Q168.02 222.85 200.83 204.39Q199.09 196.7 191.5 190.14Q189.55 188.4 190.58 185.22L196.83 166.66Q198.78 160.92 203.29 167.89Q213.96 184.4 209.96 208.6Q207.91 220.49 200.93 224.9Q166.58 246.64 117.16 249.31Q67.43 251.97 49.28 229.52ZM117.67 288.07L127.82 272.89Q129.05 271.15 131.41 271.87Q140.02 274.94 146.79 280.89Q148.54 282.63 147.41 284.68L137.36 300.58Q135.72 302.73 133.56 301.09Q131.41 299.35 118.39 291.55Q116.24 290.22 117.67 288.07Z" />
                  <use id="fatha" href="#img1" transform="matrix(1,0,0,1,83,60)"/>
                  <use id="fathax2" href="#img2" transform="matrix(1,0,0,1,58,60)"/>
                  <use id="kesra" href="#img1" transform="matrix(1,0,0,1,88,280)"/>
                  <use id="kesrax2" href="#img2" transform="matrix(1,0,0,1,68,295)"/>
                  <use id="dama" href="#img3" transform="matrix(1,0,0,1,73,60)"/>
                  <use id="DAMAX2" href="#img4" transform="matrix(1,0,0,1,73,60)"/>
                  <use id="shada_f" href="#img5" transform="matrix(1,0,0,1,68,40)"/>
                  <use id="shada_f2" href="#img6" transform="matrix(1,0,0,1,88,45)"/>
                  <use id="shada_k" href="#img7" transform="matrix(1,0,0,1,63,40)"/>
                  <use id="shada_k2" href="#img8" transform="matrix(1,0,0,1,63,40)"/>
                  <use id="shada_d" href="#img9" transform="matrix(1,0,0,1,83,40)"/>
                  <use id="H34" href="#img10" transform="matrix(1,0,0,1,68,60)"/>
                  <use id="sukoon" href="#img11" transform="matrix(1,0,0,1,83,70)"/>
                  <use id="H5" href="#img12" transform="matrix(1,0,0,1,73,81)"/>
            </svg>
          </div>

          <img id ="Img3" src="./images/F01L040.png" class="box" onclick="LetterImg('Img3')">
          <img id ="Img4" src="./images/F01L050.png" class="box" onclick="LetterImg('Img4')">
          <img id ="Img5" src="./images/F01L060.png" class="box" onclick="LetterImg('Img5')">
          <img id ="Img6" src="./images/F01L070.png" class="box" onclick="LetterImg('Img6')">
          <img id ="Img7" src="./images/F01L080.png" class="box" onclick="myImg7()">
          <img id ="Img8" src="./images/F01L090.png" class="box" onclick="myImg8()">
          <img id ="Img9" src="./images/F01L100.png" class="box" onclick="myImg9()">
          <img id ="Img10" src="./images/F01L110.png" class="box" onclick="myImg10()">
          <img id ="Img11" src="./images/F01L120.png" class="box" onclick="myImg11()">
          <img id ="Img12" src="./images/F01L130.png" class="box" onclick="myImg12()">
          <img id ="Img14" src="./images/F01L150.png" class="box" onclick="myImg14()">
          <img id ="Img15" src="./images/F01L160.png" class="box" onclick="myImg15()">
          <img id ="Img16" src="./images/F01L170.png" class="box" onclick="myImg16()">
          <img id ="Img17" src="./images/F01L180.png" class="box" onclick="myImg17()">
          <img id ="Img18" src="./images/F01L190.png" class="box" onclick="myImg18()">
          <img id ="Img19" src="./images/F01L200.png" class="box" onclick="myImg19()">
          <img id ="Img20" src="./images/F01L210.png" class="box" onclick="myImg20()">
          <img id ="Img21" src="./images/F01L220.png" class="box" onclick="myImg21()">
          <img id ="Img22" src="./images/F01L230.png" class="box" onclick="myImg22()">
          <img id ="Img23" src="./images/F01L240.png" class="box" onclick="myImg23()">
          <img id ="Img24" src="./images/F01L250.png" class="box" onclick="myImg24()">
          <img id ="Img25" src="./images/F01L260.png" class="box" onclick="myImg25()">
          <img id ="Img26" src="./images/F01L270.png" class="box" onclick="myImg26()">
          <img id ="Img27" src="./images/F01L280.png" class="box" onclick="myImg27()">
        </div>
      </div>

    </div>
  </div>
          
          


  <!-- Word boxes -->
  <div class="row container-fluid align-items-center ml-5">

    <div class="ml-5 div1">
      <svg class="s1 " style="border: 1px dotted black; border-radius:8px" id= "svg1" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg1'); "  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>

      <div class="dropdown text-center" style="padding:10px">
        
        <img src="./images/paint.png" width="25px" class="dropdown-toggle " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>
       
        <div id='colors_1' class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding:10px">
          <a class="dropdown-item" id="red1" href="#">Orange</a>
          <a class="dropdown-item" id="blue1" href="#">blue</a>
          <a class="dropdown-item" id="yellow1" href="#">Red</a>
        </div>

        <img src="./images/remove.png" width="25px" onClick="remove1();" data-toggle="tooltip" data-placement="bottom" title="Remove"/>
      </div>
      
    </div>

    <div class=" div1">
      <svg class="s2 " style="border: 1px dotted black; border-radius:8px" id= "svg2" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg2'); "  xmlns="http://www.w3.org/2000/svg"    xmlns:xlink="http://www.w3.org/1999/xlink"></svg>

      <div class="dropdown text-center" style="padding:10px">
        
        <img src="./images/paint.png" width="25px" class="dropdown-toggle " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>

        <div id='colors_2' class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" id="red2" href="#">Orange</a>
          <a class="dropdown-item" id="blue2" href="#">blue</a>
          <a class="dropdown-item" id="yellow2" href="#">Red</a>
        </div>

        <img src="./images/remove.png" width="25px" onClick="remove2();" data-toggle="tooltip" data-placement="bottom" title="Remove"/>
      </div>
    </div>

    <div >
      <svg class="s3 " style="border: 1px dotted black; border-radius:8px" id= "svg3" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg3'); "  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>


      <div class="dropdown text-center" style="padding:10px">
       
        <img src="./images/paint.png" width="25px" class="dropdown-toggle " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>


        <div id='colors_3' class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" id="red3" href="#">Orange</a>
          <a class="dropdown-item" id="blue3" href="#">blue</a>
          <a class="dropdown-item" id="yellow3" href="#">Red</a>
        </div>

        <img src="./images/remove.png" width="25px" onClick="remove3();" data-toggle="tooltip" data-placement="bottom" title="Remove"/>
      </div>
    </div>

    <div>
      <svg class="s4 " style="border: 1px dotted black; border-radius:8px" id= "svg4" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg4'); "  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
      
      <div class="dropdown text-center" style="padding:10px">
        
        <img src="./images/paint.png" width="25px" class="dropdown-toggle " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>


        <div id='colors_4' class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" id="red4" href="#">Orange</a>
          <a class="dropdown-item" id="blue4" href="#">blue</a>
          <a class="dropdown-item" id="yellow4" href="#">Red</a>
        </div>

        <img src="./images/remove.png" width="25px" onClick="remove4();" data-toggle="tooltip" data-placement="bottom" title="Remove"/>
      </div>
    </div>

    <div>
      <svg class="s5 " style="border: 1px dotted black; border-radius:8px" id= "svg5" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg5'); "  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>


      <div class="dropdown text-center" style="padding:10px">
      
        <img src="./images/paint.png" width="25px" class="dropdown-toggle " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img>

        <div id='colors_5' class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" id="red5" href="#">Orange</a>
          <a class="dropdown-item" id="blue5" href="#">blue</a>
          <a class="dropdown-item" id="yellow5" href="#">Red</a>
        </div>

        <img src="./images/remove.png" width="25px" onClick="remove5();" data-toggle="tooltip" data-placement="bottom" title="Remove"/>
      </div>
    </div>

    <div>
      <svg class="s6 "  style="border: 1px dotted black; border-radius:8px" id= "svg6" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg6'); "  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>

      <div class="dropdown text-center" style="padding:10px">
        
        <img src="./images/paint.png" width="25px" class="dropdown-toggle " id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  data-toggle="tooltip" data-placement="bottom" title="Colours"></img>

        <div id='colors_6' class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" id="red6" href="#">Orange</a>
          <a class="dropdown-item" id="blue6" href="#">blue</a>
          <a class="dropdown-item" id="yellow6" href="#">Red</a>
        </div>

        <img src="./images/remove.png" width="25px" onClick="remove6();"  data-toggle="tooltip" data-placement="bottom" title="Remove" />
      </div>
    </div>

    


    <!-- preview -->
    <div class="col-3">
      <div class="text-center">
        <h5>Preview</h5>  
            
        <svg  class="div2" id="preview" style="border: 2px dotted black; border-radius:8px"></svg>   
        
        <div aria-label="button mt-1" role="group" class="mt-2 "> 
          <a href="#" class="btn btn-info bg-danger text-white" role="button">Preview</a>
          <a id="clear" class="btn btn-info bg-primary text-white" role="button">Clear</a>
          <a href="#" class="btn btn-info bg-success text-white" role="button">Submit</a>

        </div>
      </div>
    </div> 

  </div>

      <!--
        <svg class="s2 " style="border: 1px dotted black; border-radius:8px" id= "svg2" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg2')"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
        <svg class="s3 " style="border: 1px dotted black; border-radius:8px" id= "svg3" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg3')"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
        <svg class="s4 " style="border: 1px dotted black; border-radius:8px" id= "svg4" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg4')"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
        <svg class="s5 " style="border: 1px dotted black; border-radius:8px" id= "svg5" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg5')"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
        <svg class="s6 " style="border: 1px dotted black; border-radius:8px" id= "svg6" width="150" height="150" viewBox="0 0 400 400"  onclick="SvgSelection('svg6')"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>    
-->
      
    <hr class="container">

   

    <!-- sentence box -->
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-12 text-center">
          <svg id="CanvasFinal" width="80%" ></svg> 
        
            <div aria-label="Vertical button group mt-3" role="group" class="btn-group-vertical "> 
              <button class="btn btn-default bg-warning mb-2" type="button">Clear</button> 
              <button class="btn btn-default bg-primary mb-2 text-white" type="button">Save</button>
              <button class="btn btn-default bg-success mb-2 text-white" type="button">Export</button>
            </div>
        </div>
      </div>
    </div>

    <div id="snackbar">Image has been selected !!!</div>
  </div>

  


  <?php 
    include_once('./template/footer.php');
  ?>
  <script>
    function myFunction() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
    </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script>
    $('.dropdown-toggle').dropdown()

  </script>
<script src="./editor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>


	//identify variables
	var LetterPath, HarakaPath, SvgPath, svgtarget;
	var LetterSelected = false;
  var HarakaSelected = false;
  var svgfull;
  var svg1full = false;
  var svg2full = false;
  var svg3full = false;
  var svg4full = false;
  var svg5full = false;
  var svg6full = false;
  
  var box1 = document.getElementById('svg1');
  var box2 = document.getElementById('svg2');
  var box3 = document.getElementById('svg3');
  var box4 = document.getElementById('svg4');
  var box5 = document.getElementById('svg5');
  var box6 = document.getElementById('svg6');

  $('a').click(function(){
    $('.div1 svg').clone().appendTo($('.div2'));

  });

  $('#clear').click(function(){
    document.getElementById("#preview").innerHTML = "";   

  });

  document.getElementById('colors_1').addEventListener('click', function(evt) {
    var target = evt.target;
    if (target.id === 'red1') {
      box1.style.backgroundColor = 'orange';
    } else if (target.id === 'blue1'){
      box1.style.backgroundColor = 'lightblue';
    } else if (target.id === 'yellow1'){
      box1.style.backgroundColor = 'coral';
    } else {
      box1.style.backgroundColor = 'silver';
  }
  }, false);
  document.getElementById('colors_2').addEventListener('click', function(evt) {
    var target = evt.target;
    if (target.id === 'red2') {
      box2.style.backgroundColor = 'orange';
    } else if (target.id === 'blue2'){
      box2.style.backgroundColor = 'lightblue';
    } else if (target.id === 'yellow2'){
      box2.style.backgroundColor = 'coral';
    } else {
      box.style.backgroundColor = 'white';
  }
  }, false);
  document.getElementById('colors_3').addEventListener('click', function(evt) {
    var target = evt.target;
    if (target.id === 'red3') {
      box3.style.backgroundColor = 'orange';
    } else if (target.id === 'blue3'){
      box3.style.backgroundColor = 'lightblue';
    } else if (target.id === 'yellow3'){
      box3.style.backgroundColor = 'coral';
    } else {
      box3.style.backgroundColor = 'white';
  }
  }, false);
  document.getElementById('colors_4').addEventListener('click', function(evt) {
    var target = evt.target;
    if (target.id === 'red4') {
      box4.style.backgroundColor = 'orange';
    } else if (target.id === 'blue4'){
      box4.style.backgroundColor = 'lightblue';
    } else if (target.id === 'yellow4'){
      box4.style.backgroundColor = 'coral';
    } else {
      box4.style.backgroundColor = 'white';
  }
  }, false);
  document.getElementById('colors_5').addEventListener('click', function(evt) {
    var target = evt.target;
    if (target.id === 'red5') {
      box5.style.backgroundColor = 'orange';
    } else if (target.id === 'blue5'){
      box5.style.backgroundColor = 'lightblue';
    } else if (target.id === 'yellow5'){
      box5.style.backgroundColor = 'coral';
    } else {
      box5.style.backgroundColor = 'white';
  }
  }, false);
  document.getElementById('colors_6').addEventListener('click', function(evt) {
    var target = evt.target;
    if (target.id === 'red6') {
      box6.style.backgroundColor = 'orange';
    } else if (target.id === 'blue6'){
      box6.style.backgroundColor = 'lightblue';
    } else if (target.id === 'yellow6'){
      box6.style.backgroundColor = 'coral';
    } else {
      box6.style.backgroundColor = 'white';
  }
  }, false);
  

  function remove1(){
    document.getElementById("svg1").innerHTML = "";      
  }
  function remove2(){
    document.getElementById("svg2").innerHTML = "";      
  }
  function remove3(){
    document.getElementById("svg3").innerHTML = "";      
  }
  function remove4(){
    document.getElementById("svg4").innerHTML = "";      
  }
  function remove5(){
    document.getElementById("svg5").innerHTML = "";      
  }
  function remove6(){
    document.getElementById("svg6").innerHTML = "";      
  }
  
  
  //select an option from a letter
	function LetterOptions(LetterId) {
		var LetterOption, i;
		for (i=0; i<7; i++){
			console.log(LetterId, i);
			LetterOption = document.getElementById(LetterId + i);
			LetterOption.setAttributeNS(null,"fill","black");
 			LetterOption.setAttributeNS(null,"display","block");
		}
	}

  //when the letter is clicked from the keyboard
	function LetterSelection(LetterId) {
    LetterPath = document.getElementById(LetterId);
    LetterPath.setAttributeNS(null,"fill" , "black");
    
    LetterSelected = true;
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    
	}

  //when the haraka is clicked from the keyboard
	function HarakaSelection(HarakaId) {
    HarakaPath = document.getElementById(HarakaId);
    HarakaPath.setAttributeNS(null,"fill" , "black");

    HarakaSelected = true;
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }
  
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  //placing the image in the boxes
	function SvgSelection(svgId) {
		
    svgtarget = document.getElementById(svgId);
    svgfull = svgId + "full";

    console.log("svgfull:", svgfull, svg1full, svg2full, svg3full, svg4full, svg5full, svg6full);

    if (((svg1full == true) || (svg2full == true) || (svg3full == true) || (svg4full == true) || (svg5full == true) || (svg6full == true)) && (LetterSelected == true)){
      console.log("xxxxxxxxxxxxxxxxx");
        if (svgfull == "svg1full"){
          $("div").find(".s1").empty(LetterPath);
          svg1full = true;
            }
        else if (svgfull == "svg2full") {
          $("div").find(".s2").empty();
          svg2full = true;
        }
        else if (svgfull == "svg3full"){
          $("div").find(".s3").empty();
          svg3full = true;
        }
        else if (svgfull == "svg4full"){
          $("div").find(".s4").empty(LetterPath);
          svg4full = true;
            }else if (svgfull == "svg5full") {
          $("div").find(".s5").empty();
          svg5full = true;
        }else if (svgfull == "svg6full"){
          $("div").find(".s6").empty();
          svg6full = true;
        }
      }

      //remove letter from box
    function emptySvg() {
      $(document).ready(function(){ $("svg").click(function(){ $(this).empty(".s1"); }); });
      
      //$(document).ready(function(){ $("svg").click(function(){ $(this).empty(); }); });
      console.log(this);
      }

    function EmptySVGButton() {
      console.log();
      //$(document).ready(function(){ $("svg").click(function(){ $().empty(".s1"); }); });
      $("button").on("click", function() { $("div").find(".s2").empty(); });
    }

    //change the value of the letter in the box
  console.log(LetterPath, svgtarget, svgfull, ": "+ svgfull, svgId);
    if (LetterSelected == true) {
 	    	SvgPath= LetterPath.cloneNode(true);
	  	  SvgPath.setAttributeNS(null,"fill","green");
	 	    SvgPath.setAttributeNS(null,"display","block");
	 	    svgtarget.appendChild(SvgPath);
      	LetterSelected = false;
      	LetterPath.setAttributeNS(null,"fill" , "black");
      		if (svgfull == "svg1full"){
            svg1full = true;
          }
          else if (svgfull == "svg2full") {
            svg2full = true;
          }
          else if (svgfull == "svg3full"){
            svg3full = true;
          }
          else if (svgfull == "svg4full") {
            svg4full = true;
          }
          else if (svgfull == "svg5full"){
            svg5full = true;
          }else if (svgfull == "svg6full"){
            svg6full = true;
          }
        }  
        else if (Haraka_Selected = true) {

        SvgPath= HarakaPath.cloneNode(true);
        SvgPath.setAttributeNS(null,"fill","green");
        SvgPath.setAttributeNS(null,"display","block");
        svgtarget.appendChild(SvgPath);
        HarakaSelected = false;
        HarakaPath.setAttributeNS(null, "fill" , "black");
  		}
  	console.log("ENNNNND:", svgfull, svg1full, svg2full, svg3full, svg4full, svg5full, svg6full);
   }
   

</script>

</body>
</html>

<!--
    <div class="container ">
      <button type="button" class="btn btn-warning mt-2 mb-2 text-black" onclick="myDrawClear(ctxFinal,cFinal)">Clear</button>
      <button type="button" class="btn btn-primary mt-2 mb-2" onclick="myDraw(ctx3, c3)">Save</button>
      <button type="button" class="btn btn-success mt-2 mb-2" onclick="myDraw(ctx3, c3)">Export</button>
    </div>
  </div>
-->  


 <!--
      <div class="container mt-1 row text-center">
        <div class="col text-right">
          <img src="./images/setting-icon.png" width="20px" height="20px"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
            <div class="dropdown-menu">
              <li class="dropdown-item" >Foreground</li>
              <li class="dropdown-item" >Background</li>
              <li class="dropdown-item" >Animate</li>
              <li class="dropdown-item" onClick="DeleteImgConsone('source1', imgVarConsone1)">Delete</li>
            </div>
        </div>  
        <div class="col text-right">
          <img src="./images/setting-icon.png" width="20px" height="20px"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
            <div class="dropdown-menu">
              <li class="dropdown-item" >Foreground</li>
              <li class="dropdown-item" >Background</li>
              <li class="dropdown-item" >Animate</li>
              <li class="dropdown-item" onClick="DeleteImgConsone('source2', imgVarConsone2)">Delete</li>
            </div>
        </div>
        <div class="col text-right">
          <img src="./images/setting-icon.png" width="20px" height="20px"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
            <div class="dropdown-menu">
              <li class="dropdown-item" >Foreground</li>
              <li class="dropdown-item" >Background</li>
              <li class="dropdown-item" >Animate</li>
              <li class="dropdown-item" onClick="DeleteImgConsone('source3', imgVarConsone3)">Delete</li>
            </div>
        </div>
        <div class="col text-right">
          <img src="./images/setting-icon.png" width="20px" height="20px"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
            <div class="dropdown-menu">
              <li class="dropdown-item" >Foreground</li>
              <li class="dropdown-item" >Background</li>
              <li class="dropdown-item" >Animate</li>
              <li class="dropdown-item" onClick="DeleteImgConsone('source4', imgVarConsone4)">Delete</li>
            </div>
        </div>
        <div class="col text-right">
          <img src="./images/setting-icon.png" width="20px" height="20px"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
            <div class="dropdown-menu">
              <li class="dropdown-item" >Foreground</li>
              <li class="dropdown-item" >Background</li>
              <li class="dropdown-item" >Animate</li>
              <li class="dropdown-item" onClick="DeleteImgConsone('source5', imgVarConsone5)">Delete</li>
            </div>
        </div>
        <div class="col text-right">
          <img src="./images/setting-icon.png" width="20px" height="20px"  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
            <div class="dropdown-menu">
              <li class="dropdown-item" >Foreground</li>
              <li class="dropdown-item" >Background</li>
              <li class="dropdown-item" >Animate</li>
              <li class="dropdown-item" onClick="DeleteImgConsone('source6', imgVarConsone6)">Delete</li>
            </div>
        </div>         
      
            -->
