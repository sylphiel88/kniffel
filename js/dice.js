import { RoundedBoxGeometry } from './three.js-master/examples/jsm/geometries/RoundedBoxGeometry.js';

var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);

var renderer = new THREE.WebGLRenderer({ alpha: true });
renderer.setSize(window.innerWidth*0.5, window.innerHeight*0.8);
document.getElementById("dice").appendChild(renderer.domElement);
var geometry = new RoundedBoxGeometry(1, 1, 1, 6, 0.15);
var texture1 = new THREE.TextureLoader().load('pics/five.png');
var texture2 = new THREE.TextureLoader().load('pics/two.png');
var texture3 = new THREE.TextureLoader().load('pics/three.png');
var texture4 = new THREE.TextureLoader().load('pics/four.png');
var texture5 = new THREE.TextureLoader().load('pics/one.png');
var texture6 = new THREE.TextureLoader().load('pics/six.png');
var material = [
    new THREE.MeshBasicMaterial({
        map: texture1
    }),
    new THREE.MeshBasicMaterial({
        map: texture2
    }),
    new THREE.MeshBasicMaterial({
        map: texture3
    }),
    new THREE.MeshBasicMaterial({
        map: texture4
    }),
    new THREE.MeshBasicMaterial({
        map: texture6
    }),
    new THREE.MeshBasicMaterial({
        map: texture5
    })
];
var cube1 = new THREE.Mesh(geometry, material);
cube1.position.x = -5;
scene.add(cube1);
var cube2 = new THREE.Mesh(geometry, material);
cube2.position.x = -2.5;
scene.add(cube2);
var cube3 = new THREE.Mesh(geometry, material);
cube3.position.x = 0;
scene.add(cube3);
var cube4 = new THREE.Mesh(geometry, material);
cube4.position.x = 2.5;
scene.add(cube4);
var cube5 = new THREE.Mesh(geometry, material);
cube5.position.x = 5;
scene.add(cube5);
renderer.render(scene, camera)

var zahlen = [];
for (var i = 0; i < 5; i++) {
    zahlen.push(Math.floor(Math.random() * 6 + 1));
}

var hlight = new THREE.AmbientLight(0xa0a0a0, 3);
scene.add(hlight);
camera.position.z = 5;
var speed = 4;
var winkel1, winkelx1, winkely1, winkelz1, winkx1, winky1, winkz1, winkel2, winkelx2, winkely2, winkelz2, winkx2, winky2, winkz2, winkel3, winkelx3, winkely3, winkelz3, winkx3, winky3, winkz3, winkel4, winkelx4, winkely4, winkelz4, winkx4, winky4, winkz4, winkel5, winkelx5, winkely5, winkelz5, winkx5, winky5, winkz5;
function wrf1(zahl) {
    cube1.rotation.x=0;
    cube1.rotation.y=0;
    cube1.rotation.z=0;
    winkel1 = 0;
    winkelx1 = 0;
    winkely1 = 0;
    winkelz1 = 0;
    if (zahl == 1) {
        winkx1 = 540;
        winky1 = 320;
        winkz1 = 360;
    }
    else if (zahl == 2) {
        winkx1 = 540;
        winky1 = -490;
        winkz1 = 360;
    }
    else if (zahl == 3) {
        winkx1 = 450;
        winky1 = 540;
        winkz1 = 400;
    }
    else if (zahl == 4) {
        winkx1 = -450;
        winky1 = 360;
        winkz1 = 400;
    }
    else if (zahl == 5) {
        winkx1 = 360;
        winky1 = -410;
        winkz1 = 360;
    }
    else if (zahl == 6) {
        winkx1 = 360;
        winky1 = 400;
        winkz1 = 360;
    }
    animate1();
}

function wrf2(zahl) {
    cube2.rotation.x=0;
    cube2.rotation.y=0;
    cube2.rotation.z=0;
    winkel2 = 0;
    winkelx2 = 1;
    winkely2 = 1;
    winkelz2 = 1;
    if (zahl == 1) {
        winkx2 = 541;
        winky2 = 341;
        winkz2 = 361;
    }
    else if (zahl == 2) {
        winkx2 = 541;
        winky2 = -471;
        winkz2 = 361;
    }
    else if (zahl == 3) {
        winkx2 = 451;
        winky2 = 541;
        winkz2 = 381;
    }
    else if (zahl == 4) {
        winkx2 = -451;
        winky2 = 361;
        winkz2 = 381;
    }
    else if (zahl == 5) {
        winkx2 = 361;
        winky2 = -431;
        winkz2 = 361;
    }
    else if (zahl == 6) {
        winkx2 = 361;
        winky2 = 381;
        winkz2 = 361;
    }
    animate2();
}
function wrf3(zahl) {
    cube3.rotation.x=0;
    cube3.rotation.y=0;
    cube3.rotation.z=0;
    winkel3 = 0;
    winkelx3 = 1;
    winkely3 = 1;
    winkelz3 = 1;
    if (zahl == 1) {
        winkx3 = 541;
        winky3 = 361;
        winkz3 = 361;
    }
    else if (zahl == 2) {
        winkx3 = 541;
        winky3 = -451;
        winkz3 = 361;
    }
    else if (zahl == 3) {
        winkx3 = 451;
        winky3 = 541;
        winkz3 = 361;
    }
    else if (zahl == 4) {
        winkx3 = -451;
        winky3 = 361;
        winkz3 = 361;
    }
    else if (zahl == 5) {
        winkx3 = 361;
        winky3 = -451;
        winkz3 = 361;
    }
    else if (zahl == 6) {
        winkx3 = 361;
        winky3 = 361;
        winkz3 = 361;
    }
    animate3();
}

function wrf4(zahl) {
    cube4.rotation.x=0;
    cube4.rotation.y=0;
    cube4.rotation.z=0;
    winkel4 = 0;
    winkelx4 = 1;
    winkely4 = 1;
    winkelz4 = 1;
    if (zahl == 1) {
        winkx4 = 541;
        winky4 = 381;
        winkz4 = 361;
    }
    else if (zahl == 2) {
        winkx4 = 541;
        winky4 = -431;
        winkz4 = 361;
    }
    else if (zahl == 3) {
        winkx4 = 451;
        winky4 = 541;
        winkz4 = 341;
    }
    else if (zahl == 4) {
        winkx4 = -451;
        winky4 = 361;
        winkz4 = 341;
    }
    else if (zahl == 5) {
        winkx4 = 361;
        winky4 = -471;
        winkz4 = 361;
    }
    else if (zahl == 6) {
        winkx4 = 361;
        winky4 = 341;
        winkz4 = 361;
    }
    animate4();
}
function wrf5(zahl) {
    cube5.rotation.x=0;
    cube5.rotation.y=0;
    cube5.rotation.z=0;
    winkel5 = 0;
    winkelx5 = 1;
    winkely5 = 1;
    winkelz5 = 1;
    if (zahl == 1) {
        winkx5 = 541;
        winky5 = 401;
        winkz5 = 361;
    }
    else if (zahl == 2) {
        winkx5 = 541;
        winky5 = -411;
        winkz5 = 361;
    }
    else if (zahl == 3) {
        winkx5 = 451;
        winky5 = 541;
        winkz5 = 321;
    }
    else if (zahl == 4) {
        winkx5 = -451;
        winky5 = 361;
        winkz5 = 321;
    }
    else if (zahl == 5) {
        winkx5 = 361;
        winky5 = -491;
        winkz5 = 361;
    }
    else if (zahl == 6) {
        winkx5 = 361;
        winky5 = 321;
        winkz5 = 361;
    }
    animate5();
}
function animate1() {
    if (winkx1 < 0) { var addx1 = -speed; } else { var addx1 = speed }
    if (winky1 < 0) { var addy1 = -speed; } else { var addy1 = speed }
    if (winkz1 < 0) { var addz1 = -speed; } else { var addz1 = speed }
    winkelx1 += addx1;
    winkely1 += addy1;
    winkelz1 += addz1;
    if (winkelx1 > winkx1 && winkx1 < 0) {
        cube1.rotation.x -= Math.PI * speed / 180;
    }
    if (winkelx1 < winkx1 && winkx1 > 0) {
        cube1.rotation.x += Math.PI * speed / 180;
    }
    if (winkely1 > winky1 && winky1 < 0) {
        cube1.rotation.y -= Math.PI * speed / 180;
    }
    if (winkely1 < winky1 && winky1 > 0) {
        cube1.rotation.y += Math.PI * speed / 180;
    }
    if (winkelz1 > winkz1 && winkz1 < 0) {
        cube1.rotation.z -= Math.PI * speed / 180;
    }
    if (winkelz1 < winkz1 && winkz1 > 0) {
        cube1.rotation.z += Math.PI * speed / 180;
    }
    requestAnimationFrame(animate1);
    renderer.render(scene, camera);
}
function animate2() {
    if (winkx2 < 0) { var addx2 = -speed; } else { var addx2 = speed }
    if (winky2 < 0) { var addy2 = -speed; } else { var addy2 = speed }
    if (winkz2 < 0) { var addz2 = -speed; } else { var addz2 = speed }
    winkelx2 += addx2;
    winkely2 += addy2;
    winkelz2 += addz2;
    if (winkelx2 > winkx2 && winkx2 < 0) {
        cube2.rotation.x -= Math.PI * speed / 180;
    }
    if (winkelx2 < winkx2 && winkx2 > 0) {
        cube2.rotation.x += Math.PI * speed / 180;
    }
    if (winkely2 > winky2 && winky2 < 0) {
        cube2.rotation.y -= Math.PI * speed / 180;
    }
    if (winkely2 < winky2 && winky2 > 0) {
        cube2.rotation.y += Math.PI * speed / 180;
    }
    if (winkelz2 > winkz2 && winkz2 < 0) {
        cube2.rotation.z -= Math.PI * speed / 180;
    }
    if (winkelz2 < winkz2 && winkz2 > 0) {
        cube2.rotation.z += Math.PI * speed / 180;
    }
    requestAnimationFrame(animate2);
    renderer.render(scene, camera);
}
function animate3() {
    if (winkx3 < 0) { var addx3 = -speed; } else { var addx3 = speed }
    if (winky3 < 0) { var addy3 = -speed; } else { var addy3 = speed }
    if (winkz3 < 0) { var addz3 = -speed; } else { var addz3 = speed }
    winkelx3 += addx3;
    winkely3 += addy3;
    winkelz3 += addz3;
    if (winkelx3 > winkx3 && winkx3 < 0) {
        cube3.rotation.x -= Math.PI * speed / 180;
    }
    if (winkelx3 < winkx3 && winkx3 > 0) {
        cube3.rotation.x += Math.PI * speed / 180;
    }
    if (winkely3 > winky3 && winky3 < 0) {
        cube3.rotation.y -= Math.PI * speed / 180;
    }
    if (winkely3 < winky3 && winky3 > 0) {
        cube3.rotation.y += Math.PI * speed / 180;
    }
    if (winkelz3 > winkz3 && winkz3 < 0) {
        cube3.rotation.z -= Math.PI * speed / 180;
    }
    if (winkelz3 < winkz3 && winkz3 > 0) {
        cube3.rotation.z += Math.PI * speed / 180;
    }
    requestAnimationFrame(animate3);
    renderer.render(scene, camera);
}
function animate4() {
    if (winkx4 < 0) { var addx4 = -speed; } else { var addx4 = speed }
    if (winky4 < 0) { var addy4 = -speed; } else { var addy4 = speed }
    if (winkz4 < 0) { var addz4 = -speed; } else { var addz4 = speed }
    winkelx4 += addx4;
    winkely4 += addy4;
    winkelz4 += addz4;
    if (winkelx4 > winkx4 && winkx4 < 0) {
        cube4.rotation.x -= Math.PI * speed / 180;
    }
    if (winkelx4 < winkx4 && winkx4 > 0) {
        cube4.rotation.x += Math.PI * speed / 180;
    }
    if (winkely4 > winky4 && winky4 < 0) {
        cube4.rotation.y -= Math.PI * speed / 180;
    }
    if (winkely4 < winky4 && winky4 > 0) {
        cube4.rotation.y += Math.PI * speed / 180;
    }
    if (winkelz4 > winkz4 && winkz4 < 0) {
        cube4.rotation.z -= Math.PI * speed / 180;
    }
    if (winkelz4 < winkz4 && winkz4 > 0) {
        cube4.rotation.z += Math.PI * speed / 180;
    }
    requestAnimationFrame(animate4);
    renderer.render(scene, camera);
}
function animate5() {
    if (winkx5 < 0) { var addx5 = -speed; } else { var addx5 = speed }
    if (winky5 < 0) { var addy5 = -speed; } else { var addy5 = speed }
    if (winkz5 < 0) { var addz5 = -speed; } else { var addz5 = speed }
    winkelx5 += addx5;
    winkely5 += addy5;
    winkelz5 += addz5;
    if (winkelx5 > winkx5 && winkx5 < 0) {
        cube5.rotation.x -= Math.PI * speed / 180;
    }
    if (winkelx5 < winkx5 && winkx5 > 0) {
        cube5.rotation.x += Math.PI * speed / 180;
    }
    if (winkely5 > winky5 && winky5 < 0) {
        cube5.rotation.y -= Math.PI * speed / 180;
    }
    if (winkely5 < winky5 && winky5 > 0) {
        cube5.rotation.y += Math.PI * speed / 180;
    }
    if (winkelz5 > winkz5 && winkz5 < 0) {
        cube5.rotation.z -= Math.PI * speed / 180;
    }
    if (winkelz5 < winkz5 && winkz5 > 0) {
        cube5.rotation.z += Math.PI * speed / 180;
    }
    requestAnimationFrame(animate5);
    renderer.render(scene, camera);
}

export function wuerfeln(zahlen){
    for(var i=0;i<5;i++){
        zahlen[i]=wuerf[i]==true?Math.floor(Math.random()*6+1):zahlen[i];
    }
    if (wuerf[0]) {
        wrf1(zahlen[0]);
    }
    if (wuerf[1]) {
        wrf2(zahlen[1]);
    }
    if (wuerf[2]) {
        wrf3(zahlen[2]);
    }
    if (wuerf[3]) {
        wrf4(zahlen[3]);
    }
    if (wuerf[4]) {
        wrf5(zahlen[4]);
    }
};

renderer.render(scene, camera);