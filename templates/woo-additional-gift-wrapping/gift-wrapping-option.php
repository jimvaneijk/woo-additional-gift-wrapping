<div
    class="additional-gift-wrapping"
>
  <?php if($type === 'select'): ?>
    <div class="additional-gift-wrapping__select">
      <label for="gift_wrap">
          <?php echo str_replace(['{price}'], [$price], wp_kses_post($label)); ?>
      </label>
      <select
          name="gift_wrap"
          id="gift_wrap"
          class="select"
      >
        <option value="">
            <?php echo __('No', 'woocommerce-product-gift-wrap') ?>
        </option>
        <option value="Yes">
            <?php echo __('Yes', 'woocommerce-product-gift-wrap') ?> <?php if($price) { echo '(+'. $price . ')'; }?>
        </option>
      </select>
    </div>
  <?php else:?>
    <label>
        <?php echo str_replace(['{checkbox}', '{price}'], [$checkbox, $price], wp_kses_post($message)); ?>
    </label>
  <?php endif; ?>
</div>
