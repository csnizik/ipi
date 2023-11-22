<?php

namespace Drupal\cigpods\Plugin\Asset\AssetType;

use Drupal\farm_entity\Plugin\Asset\AssetType\FarmAssetType;
use Drupal\farm_field\FarmFieldFactory;

/**
 * Provides the CIG Project asset type.
 *
 * @AssetType(
 * id = "csc_field_enrollment",
 * label = @Translation("CSCFieldEnrollment"),
 * )
 */
class CSCFieldEnrollment extends FarmAssetType {

  /**
   * {@inheritdoc}
   */
  public function buildFieldDefinitions() {

    $fields = parent::buildFieldDefinitions();

    $field_info = [
	    'f_enrollment_producer_id' => [
        'type' => 'entity_reference',
        'label' => 'Producer ID',
        'description' => 'Producer ID',
		    'target_type' => 'asset',
		    'target_bundle' => 'producer_enrollment',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_tract_id' => [
        'type' => 'string',
        'label' => 'Field Enrollment Tract ID',
        'description' => 'Field Enrollment Tract ID',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_field_id' => [
        'type' => 'string',
        'label' => 'Field Enrollment Field ID',
        'description' => 'Field Enrollment Field ID',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_state' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment State or Territory',
        'description' => 'Field Enrollment State or Territory',
		    'target_type' => 'taxonomy_term',
        'target_bundle' => 'state',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_county' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment County',
        'description' => 'Field Enrollment County',
		    'target_type' => 'taxonomy_term',
        'target_bundle' => 'county',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_prior_field_id'=> [
        'type' => 'string',
        'label' => 'Field Enrollment Prior Field ID',
        'description' => 'Field Enrollment Prior Field ID',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
      'f_enrollment_start_date' => [
        'type' => 'timestamp',
        'label' => 'Field Enrollment Contract Start Date',
        'description' => 'Field Enrollment Contract Start Date',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_total_field_area' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Total Field Area',
        'description' => 'Field Enrollment Total Field Area',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_commodity_category' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Commodity Category',
        'description' => 'Field Enrollment Commodity Category',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'commodity_category',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_commodity_type' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Commodity Type',
        'description' => 'Field Enrollment Commodity Type',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'commodity_term',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_baseline_yield' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Baseline Yield',
        'description' => 'Field Enrollment Baseline Yield',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_baseline_yield_unit' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Baseline Yield Unit',
        'description' => 'Field Enrollment Baseline Yield Unit',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'baseline_yield_unit',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
	    'f_enrollment_baseline_yield_unit_other' => [
        'type' => 'string',
        'label' => 'Field Enrollment Baseline Yield Unit Other',
        'description' => 'Field Enrollment Baseline Yield Unit Other',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_baseline_yield_location' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Baseline Yield Location',
        'description' => 'Field Enrollment Baseline Yield Location',
        'allowed_values' => [
          'Enrolled field' => t(string: 'Enrolled field'),
          'Whole Operation' => t(string: 'Whole Operation'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
	    'f_enrollment_baseline_yield_location_other' => [
        'type' => 'string',
        'label' => 'Field Enrollment Baseline Yield Location Other',
        'description' => 'Field Enrollment Baseline Yield Location Other',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_field_land_use' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Field Land Use',
        'description' => 'Field Enrollment Field Land Use',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'field_land_use',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_field_irrigated' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Field Irrigated',
        'description' => 'Field Enrollment Field Irrigated',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'field_irrigated',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_field_tillage' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Field Tillage',
        'description' => 'Field Enrollment Field Tillage',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'field_tillage',
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_prior_utilization_percent' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice (Combination) Past Extent - Farm',
        'description' => 'Field Enrollment Practice (Combination) Past Extent - Farm',
        'allowed_values' => [
          'Used on less than 25% of operation' => t(string: 'Used on less than 25% of operation'),
          'Used on 25-50% of operation' => t(string: 'Used on 25-50% of operation'),
          'Used on 51-75% of operation' => t(string: 'Used on 51-75% of operation'),
          'Used on more than 75% of operation' => t(string: 'Used on more than 75% of operation'),
          'Never Used' => t(string: 'Never Used')
        ],
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
      'f_enrollment_field_any_csaf_practice' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Field any CSAF Practice',
        'description' => 'Field Enrollment Field any CSAF Practice',
        'allowed_values' => [
          'Yes' => t(string: 'Yes'),
          'No' => t(string: 'No'),
          "I don't know" => t(string: "I don't Know"),
        ],
        'required' => TRUE ,
        'multiple' => FALSE,
      ],
	    'f_enrollment_field_practice_prior_utilization' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice (Combination) Past Use - This Feild',
        'description' => 'Field Enrollment Practice (Combination) Past Use - This Field',
        'allowed_values' => [
          'Used on less than 25% of operation' => t(string: 'Used on less than 25% of operation'),
          'Used on 25-50% of operation' => t(string: 'Used on 25-50% of operation'),
          'Used on 51-75% of operation' => t(string: 'Used on 51-75% of operation'),
          'Used on more than 75% of operation' => t(string: 'Used on more than 75% of operation'),
          'Never Used' => t(string: 'Never Used')
        ],
        'required' => TRUE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_type_1' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Practice 1 Type',
        'description' => 'Field Enrollment Practice 1 Type',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'practice_type',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_standard_1' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 1 Standard',
        'description' => 'Field Enrollment Practice 1 Standard',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_standard_other_1' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 1 Standard',
        'description' => 'Field Enrollment Other Practice 1 Standard',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_year_1' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Planned Practice 1 Implementation Year',
        'description' => 'Field Enrollment Planned Practice 1 Implementation Year',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_extent_1' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Practice 1 Extent',
        'description' => 'Field Enrollment Practice 1 Extent',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_1' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 1 Extent Unit',
        'description' => 'Field Enrollment Practice 1 Extent Unit',
        'allowed_values' => [
          'Acres' => t(string: 'Acres'),
          'Head of livestock' => t(string: 'Head of livestock'),
          'Linear feet' => t(string: 'Linear feet'),
          'Square feet' => t(string: 'Square feet'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_other_1' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 1 Extent Unit',
        'description' => 'Field Enrollment Other Practice 1 Extent Unit',
        'required' => TRUE,
        'multiple' => FALSE,
      ],
	   'f_enrollment_practice_type_2' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Practice 2 Type',
        'description' => 'Field Enrollment Practice 2 Type',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'practice_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_standard_2' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 2 Standard',
        'description' => 'Field Enrollment Practice 2 Standard',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_standard_other_2' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 2 Standard',
        'description' => 'Field Enrollment Other Practice 2 Standard',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_year_2' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Planned Practice 2 Implementation Year',
        'description' => 'Field Enrollment Planned Practice 2 Implementation Year',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_extent_2' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Practice 2 Extent',
        'description' => 'Field Enrollment Practice 2 Extent',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_2' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 2 Extent Unit',
        'description' => 'Field Enrollment Practice 2 Extent Unit',
        'allowed_values' => [
          'Acres' => t(string: 'Acres'),
          'Head of livestock' => t(string: 'Head of livestock'),
          'Linear feet' => t(string: 'Linear feet'),
          'Square feet' => t(string: 'Square feet'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	   'f_enrollment_practice_extent_unit_other_2' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 2 Extent Unit',
        'description' => 'Field Enrollment Other Practice 2 Extent Unit',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_type_3' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Practice 3 Type',
        'description' => 'Field Enrollment Practice 3 Type',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'practice_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_standard_3' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 3 Standard',
        'description' => 'Field Enrollment Practice 3 Standard',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_standard_other_3' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 3 Standard',
        'description' => 'Field Enrollment Other Practice 3 Standard',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_year_3' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Planned Practice 3 Implementation Year',
        'description' => 'Field Enrollment Planned Practice 3 Implementation Year',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_extent_3' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Practice 3 Extent',
        'description' => 'Field Enrollment Practice 3 Extent',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_3' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 3 Extent Unit',
        'description' => 'Field Enrollment Practice 3 Extent Unit',
        'allowed_values' => [
          'Acres' => t(string: 'Acres'),
          'Head of livestock' => t(string: 'Head of livestock'),
          'Linear feet' => t(string: 'Linear feet'),
          'Square feet' => t(string: 'Square feet'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_other_3' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 3 Extent Unit',
        'description' => 'Field Enrollment Other Practice 3 Extent Unit',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_type_4' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Practice 4 Type',
        'description' => 'Field Enrollment Practice 4 Type',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'practice_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_standard_4' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 4 Standard',
        'description' => 'Field Enrollment Practice 4 Standard',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_standard_other_4' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 4 Standard',
        'description' => 'Field Enrollment Other Practice 4 Standard',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_year_4' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Planned Practice 4 Implementation Year',
        'description' => 'Field Enrollment Planned Practice 4 Implementation Year',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_extent_4' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Practice 4 Extent',
        'description' => 'Field Enrollment Practice 4 Extent',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_4' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 4 Extent Unit',
        'description' => 'Field Enrollment Practice 4 Extent Unit',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_other_4' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 4 Extent Unit',
        'description' => 'Field Enrollment Other Practice 4 Extent Unit',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_type_5' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Practice 5 Type',
        'description' => 'Field Enrollment Practice 5 Type',
        'target_type' => 'taxonomy_term',
        'target_bundle' => 'practice_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_standard_5' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 5 Standard',
        'description' => 'Field Enrollment Practice 5 Standard',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_standard_other_5' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 5 Standard',
        'description' => 'Field Enrollment Other Practice 5 Standard',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_year_5' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Planned Practice 5 Implementation Year',
        'description' => 'Field Enrollment Planned Practice 5 Implementation Year',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_extent_5' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Practice 5 Extent',
        'description' => 'Field Enrollment Practice 5 Extent',
		    'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_5' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 5 Extent Unit',
        'description' => 'Field Enrollment Practice 5 Extent Unit',
        'allowed_values' => [
          'Acres' => t(string: 'Acres'),
          'Head of livestock' => t(string: 'Head of livestock'),
          'Linear feet' => t(string: 'Linear feet'),
          'Square feet' => t(string: 'Square feet'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_other_5' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 5 Extent Unit',
        'description' => 'Field Enrollment Other Practice 5 Extent Unit',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_type_6' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Practice 6 Type',
        'description' => 'Field Enrollment Practice 6 Type',
		    'target_type' => 'taxonomy_term',
        'target_bundle' => 'practice_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_standard_6' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 6 Standard',
        'description' => 'Field Enrollment Practice 6 Standard',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_standard_other_6' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 6 Standard',
        'description' => 'Field Enrollment Other Practice 6 Standard',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_year_6' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Planned Practice 6 Implementation Year',
        'description' => 'Field Enrollment Planned Practice 6 Implementation Year',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_extent_6' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Practice 6 Extent',
        'description' => 'Field Enrollment Practice 6 Extent',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_6' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 6 Extent Unit',
        'description' => 'Field Enrollment Practice 6 Extent Unit',
        'allowed_values' => [
          'Acres' => t(string: 'Acres'),
          'Head of livestock' => t(string: 'Head of livestock'),
          'Linear feet' => t(string: 'Linear feet'),
          'Square feet' => t(string: 'Square feet'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_other_6' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 6 Extent Unit',
        'description' => 'Field Enrollment Other Practice 6 Extent Unit',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_type_7' => [
        'type' => 'entity_reference',
        'label' => 'Field Enrollment Practice 7 Type',
        'description' => 'Field Enrollment Practice 7 Type',
		    'target_type' => 'taxonomy_term',
        'target_bundle' => 'practice_type',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_standard_7' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 7 Standard',
        'description' => 'Field Enrollment Practice 7 Standard',
        'allowed_values' => [
          'NRCS' => t(string: 'NRCS'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_standard_other_7' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 7 Standard',
        'description' => 'Field Enrollment Other Practice 7 Standard',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_year_7' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Planned Practice 7 Implementation Year',
        'description' => 'Field Enrollment Planned Practice 7 Implementation Year',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
      'f_enrollment_practice_extent_7' => [
        'type' => 'fraction',
        'label' => 'Field Enrollment Practice 7 Extent',
        'description' => 'Field Enrollment Practice 7 Extent',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_7' => [
        'type' => 'list_string',
        'label' => 'Field Enrollment Practice 7 Extent Unit',
        'description' => 'Field Enrollment Practice 7 Extent Unit',
        'allowed_values' => [
          'Acres' => t(string: 'Acres'),
          'Head of livestock' => t(string: 'Head of livestock'),
          'Linear feet' => t(string: 'Linear feet'),
          'Square feet' => t(string: 'Square feet'),
          'Other (specify)' => t(string: 'Other (specify)'),
        ],
        'required' => FALSE,
        'multiple' => FALSE,
      ],
	    'f_enrollment_practice_extent_unit_other_7' => [
        'type' => 'string',
        'label' => 'Field Enrollment Other Practice 7 Extent Unit',
        'description' => 'Field Enrollment Other Practice 7 Extent Unit',
        'required' => FALSE,
        'multiple' => FALSE,
      ],
    ];

    $farmFieldFactory = new FarmFieldFactory();

    foreach ($field_info as $name => $info) {
      $fields[$name] = $farmFieldFactory->bundleFieldDefinition($info)
        ->setDisplayConfigurable('form', TRUE)
        ->setDisplayConfigurable('view', TRUE);
    }

    return $fields;

  }

}
