<template>
      <ImageEditorComponent/>
      <RouterView></RouterView>
  </template>
  <script>
import ImageEditorComponent from './ImageEditorComponent.vue';
import { RouterView } from 'vue-router';
  export default {
    name: 'App',
    components: {
    ImageEditorComponent,
    RouterView
    },
    data: () => ({
    }),
  };
  </script>
  <style>
  </style>