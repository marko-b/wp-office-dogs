<?php
/**
 * Child theme functions
 */

  /**
   * Format dog birthdate
   * @param int $dog_id Dog ID
   * @param string $format for the birthdate
   * @return boolean
   */
  function format_birthdate($dog_id, $format) {
    // 'birthdate' format in DB is 20191017 (date is 17.10.2019.)
    $dog_birthdate_raw = implode(get_post_meta($dog_id, 'birthdate'));

    if (!empty($dog_birthdate_raw)) {
      if ($format == 'timestamp') return date_create_from_format('Ymd', $dog_birthdate_raw)->getTimestamp();

      if ($format == 'month') return date_create_from_format('Ymd', $dog_birthdate_raw)->format('m');

      if ($format == 'full_date') return date_create_from_format('Ymd', $dog_birthdate_raw)->format('d.m.Y');
    }

    return false;
  }


  /**
   * Check if dog birthdate is in this month
   * @param int $dog_id Dog ID
   * @return boolean
   */
  function dog_is_celebrating($dog_id) {
    $current_month = date('m');

    $dog_birthdate_month = format_birthdate($dog_id, 'month');

    if (false !== $dog_birthdate_month && $dog_birthdate_month == $current_month) return true;

    return false;
  }

  /**
   * Sort query by dog birthdate (oldest to youngesst)
   * @param WP_Query $query
   */
  function sort_dogs_by_birthdate(WP_Query $query) {
    // helper array for sorting
    $birthdate_timestamps = array();

    foreach ($query->posts as $dog_post) {
      $dog_birthdate_timestamp = format_birthdate($dog_post->ID, 'timestamp');

      $birthdate_timestamps[] = $dog_birthdate_timestamp;
    }

    // sort dogs by birthdate (oldest to youngest)
    array_multisort($birthdate_timestamps, SORT_ASC, SORT_NUMERIC, $query->posts);

    return;
  }

  /**
   * Get all dog breeds (custom taxonomy)
   * @return array
   */
  function get_all_breeds() {
    return wp_list_pluck(get_terms('mb_dog_breed'), 'name');
  }
