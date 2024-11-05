<template>
<label class="w-full max-w-xs form-control">
  <div class="label">
    <span class="label-text">{{ label }}</span>

  </div>
  <input :type="type" :placeholder="placeholder" class="w-full max-w-xs input input-bordered" />
  <div class="label">
    <span class="label-text-alt">{{ hint }}</span>

  </div>
</label>
</template>

<script>
export default {

    props:['value','type','placeholder','hint','label']
}
</script>

<style>

</style>
