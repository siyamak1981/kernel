
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>404 particles page #instaspeed</title>
  <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

  
  
      <link rel="stylesheet" href="css/404.css">

  
</head>

<body>

      
    <div id="page-404">
      <div id="title">
        <h2>چیزی پیدا نشد</h2>
      </div>
      
      <div id="back-to-home">
        <a href="">برگشت به خانه</a>
      </div>
      
        <div id="canvas"></div>
    </div>

		<script id="particle-image-vs" type="x-shader/x-vertex">
			uniform float uDuration;
			uniform float uElapsedTime;
			uniform float uSize;
			uniform float uNoise;
			uniform vec2 uMousePosition;
			uniform float uMouseRadius;
			uniform float uMouseStrength;

			// useless ?
		  varying float pointDisplacement;
			varying vec3 vColor;

			// we do also have access to attributes defined in buffer geometry : minPosition, maxPosition, color (vec3)
			attribute vec3 minPosition;
			attribute vec3 maxPosition;
			attribute vec3 color;
			attribute vec2 noiseValue;

			float exponentialInOut( float k ){
			    // https://github.com/tweenjs/tween.js/blob/master/src/Tween.js
			    if( k <= 0.0 ){
			        return 0.0;
			    }
			    else if( k >= 1.0 ){
			        return 1.0;
			    }
			    else if( ( k *= 2.0 ) < 1.0 ){
			        return 0.5 * pow( 1024.0, k - 1.0 );
			    }
			    return 0.5 * ( - pow( 2.0, - 10.0 * ( k - 1.0 ) ) + 2.0 );
			}

      void main() {
			  	vColor = color;

				// EXPLOSION/IMPLOSION
				// calculate time value (also vary duration of each particle)
    			float t = clamp(uElapsedTime / uDuration, 0.0, 1.0);

				// calculate progress
    			float progress = exponentialInOut( t );

				// calculate new position (simple linear interpolation)
				vec3 delta = minPosition - maxPosition;
				vec3 explosingPosition = position + delta * progress;


				// ADD MOUSE INTERACTION
				vec3 interactionPosition = explosingPosition;


				float distanceToCenter = clamp(distance(vec2(interactionPosition.x, interactionPosition.y), uMousePosition) / uMouseRadius, 0.0, 1.0);
          
          float distanceToPoint = distance(vec2(interactionPosition.x, interactionPosition.y), uMousePosition);

				// ATTRACTION
				//vec3 vectorToPoint = normalize(vec3(uMousePosition, 0.0) - interactionPosition);

				// REPULSION
				vec3 vectorToPoint = normalize(interactionPosition - vec3(uMousePosition, 0.0));


					vectorToPoint.x = vectorToPoint.x / (pow(distanceToCenter, uMouseStrength));
          
					vectorToPoint.y = vectorToPoint.y / (pow(distanceToCenter, uMouseStrength));
        
          pointDisplacement = (abs(vectorToPoint.x) + abs(vectorToPoint.y)) / 2.0;

				float xAnim = interactionPosition.x + vectorToPoint.x * uMouseRadius * distanceToCenter;

				float yAnim = interactionPosition.y + vectorToPoint.y * uMouseRadius * distanceToCenter;

				interactionPosition = vec3(xAnim, yAnim, interactionPosition.z);




				// ADD NOISE
				vec3 noisePosition = interactionPosition;

        float noiseX = interactionPosition.x + cos(noiseValue.x * (uElapsedTime / 100.0)) * progress * uNoise * min((uMouseRadius / 4.0) / distanceToPoint, 1.0);
        float noiseY = interactionPosition.y + cos(noiseValue.y * (uElapsedTime / 100.0)) * progress * uNoise * min((uMouseRadius / 4.0) / distanceToPoint, 1.0);
          
        noisePosition = vec3(noiseX, noiseY, interactionPosition.z);


				vec4 mvPosition = modelViewMatrix * vec4( noisePosition, 1.0 );

				gl_PointSize = uSize;

		    gl_Position = projectionMatrix * mvPosition;
		    }
		</script>

		<script id="particle-image-fs" type="x-shader/x-fragment">
			//uniform vec3 uColor;

			// useless ?
		    varying float pointDisplacement;
		  	varying vec3 vColor;
      
       uniform float uMouseRadius;

		    void main() {
		        vec4 finalColor = vec4(vColor + min(pointDisplacement / 15.0, 0.3), 1.0);
          
            //vec4 finalColor = vec4(vColor, 1.0);

		        gl_FragColor = finalColor;
		    }
		</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/96/three.min.js'></script>

  

    <script  src="js/404.js"></script>




</body>

</html>
