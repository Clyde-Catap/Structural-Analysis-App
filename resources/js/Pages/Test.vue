<template>
    <canvas ref="experience"></canvas>
  </template>
  
  <script>
  import { ref, onMounted } from 'vue';
  import * as THREE from 'three';
  
  export default {
    setup() {
      const experience = ref(null);
  
      onMounted(() => {
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({
          canvas: experience.value,
          antialias: true
        });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        
        // Example: Adding a cube to the scene
        const geometry = new THREE.BoxGeometry();
        const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
        const cube = new THREE.Mesh(geometry, material);
        scene.add(cube);
        
        camera.position.z = 5;
        
        const animate = function () {
          requestAnimationFrame(animate);
          
          cube.rotation.x += 0.01;
          cube.rotation.y += 0.01;
          
          
        };
        
        animate();
      });
  
      return {
        experience
      };
    }
  };
  </script>
