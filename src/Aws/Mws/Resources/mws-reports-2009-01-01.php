<?php
namespace Aws\Mws\Resource;
/**
 * Complete list of valid values for ReportType
 * @documentation https://images-na.ssl-images-amazon.com/images/G/01/mwsportal/doc/en_US/bde/MWSReportsApiReference._V372272606_.pdf#page=49
 */
$reportTypeEnumeration = array(
  '_GET_FLAT_FILE_OPEN_LISTINGS_DATA_',
  '_GET_MERCHANT_LISTINGS_DATA_BACK_COMPAT_',
  '_GET_MERCHANT_LISTINGS_DATA_',
  '_GET_MERCHANT_LISTINGS_DATA_LITE_',
  '_GET_MERCHANT_LISTINGS_DATA_LITER_',
  '_GET_CONVERGED_FLAT_FILE_SOLD_LISTINGS_DATA_',
  '_GET_MERCHANT_CANCELLED_LISTINGS_DATA_',
  '_GET_MERCHANT_LISTINGS_DEFECT_DATA_',
  '_GET_FLAT_FILE_ACTIONABLE_ORDER_DATA_',
  '_GET_ORDERS_DATA_',
  '_GET_FLAT_FILE_ORDERS_DATA_',
  '_GET_CONVERGED_FLAT_FILE_ORDER_REPORT_DATA_',
  '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_',
  '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_',
  '_GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_',
  '_GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_',
  '_GET_FLAT_FILE_PENDING_ORDERS_DATA_',
  '_GET_PENDING_ORDERS_DATA_',
  '_GET_CONVERGED_FLAT_FILE_PENDING_ORDERS_DATA_',
  '_GET_SELLER_FEEDBACK_DATA_',
  '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_LAST_UPDATE_',
  '_GET_FLAT_FILE_ALL_ORDERS_DATA_BY_ORDER_DATE_',
  '_GET_XML_ALL_ORDERS_DATA_BY_LAST_UPDATE_',
  '_GET_XML_ALL_ORDERS_DATA_BY_ORDER_DATE_',
  '_GET_AFN_INVENTORY_DATA_',
  '_GET_AMAZON_FULFILLED_SHIPMENTS_DATA_',
  '_GET_FBA_FULFILLMENT_CUSTOMER_RETURNS_DATA_',
  '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_SALES_DATA_',
  '_GET_FBA_FULFILLMENT_CUSTOMER_TAXES_DATA_',
  '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_PROMOTION_DATA_',
  '_GET_FBA_FULFILLMENT_INBOUND_NONCOMPLIANCE_DATA_',
  '_GET_FBA_FULFILLMENT_CURRENT_INVENTORY_DATA_',
  '_GET_FBA_FULFILLMENT_MONTHLY_INVENTORY_DATA_',
  '_GET_FBA_FULFILLMENT_INVENTORY_RECEIPTS_DATA_',
  '_GET_FBA_FULFILLMENT_INVENTORY_SUMMARY_DATA_',
  '_GET_FBA_FULFILLMENT_INVENTORY_ADJUSTMENTS_DATA_',
  '_GET_FBA_FULFILLMENT_INVENTORY_HEALTH_DATA_',
  '_GET_FBA_MYI_UNSUPPRESSED_INVENTORY_DATA_',
  '_GET_FBA_MYI_ALL_INVENTORY_DATA_',
  '_GET_FBA_FULFILLMENT_CUSTOMER_SHIPMENT_REPLACEMENT_DATA_',
  '_GET_FBA_FULFILLMENT_CROSS_BORDER_INVENTORY_MOVEMENT_DATA_',
  '_GET_FBA_RECOMMENDED_REMOVAL_DATA_',
  '_GET_FBA_HAZMAT_STATUS_CHANGE_DATA_',
  '_GET_FBA_ESTIMATED_FBA_FEES_TXT_DATA_',
  '_GET_NEMO_MERCHANT_LISTINGS_DATA_',
  '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_DAILY_DATA_TSV_',
  '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_DAILY_DATA_XML_',
  '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_WEEKLY_DATA_TSV_',
  '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_WEEKLY_DATA_XML_',
  '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_MONTHLY_DATA_TSV_',
  '_GET_PADS_PRODUCT_PERFORMANCE_OVER_TIME_MONTHLY_DATA_XML_',
);

/**
 * List of all valid report-request status values.
 */
$reportRequestStatusEnumeration = array(
  '_SUBMITTED_',
  '_IN_PROGRESS_',
  '_CANCELLED_',
  '_DONE_',
  '_DONE_NO_DATA_'
);

$reportScheduleEnumeration = array(
  '_15_MINUTES_',
  '_30_MINUTES_',
  '_1_HOUR_',
  '_2_HOURS_',
  '_4_HOURS_',
  '_8_HOURS_',
  '_12_HOURS_',
  '_72_HOURS_',
  '_1_DAY_',
  '_2_DAYS_',
  '_1_WEEK_',
  '_14_DAYS_',
  '_15_DAYS_',
  '_30_DAYS_',
  '_NEVER_'
);

return array(
  'apiVersion' => '2009-01-01',
  'endpointPrefix' => '',
  'serviceFullName' => 'Amazon MWS Reports API',
  'serviceAbbreviation' => 'MWS Reports',
  //'serviceType' => 'aws.query',

  /**
   * This flag causes the Aws\Common\Command\XmlResponseLocationViewer to promote direct children of
   * <operation-name>Result to top-level elements in the parsed response array.
   */
  'resultWrapped' => false,

  'signatureVersion' => 'v2',

  'namespace' => 'Mws',

  'regions' => array(
    'us' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.com'
    ),
    'ca' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.ca'
    ),
    'de' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.de'
    ),
    'es' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.es'
    ),
    'fr' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.fr'
    ),
    'it' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.it'
    ),
    'jp' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.jp'
    ),
    'uk' => array(
      'http' => false,
      'https' => true,
      'hostname' => 'mws.amazonservices.co.uk'
    ),




  ),

  'operations' => array(

    'RequestReport' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'responseClass' => 'RequestReportResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'RequestReport',
          'static' => true
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'ReportType' => array(
          'location' => 'aws.query',
          'required' => true,
          'type' => 'string',
          'enum' => $reportTypeEnumeration
        ),
        'MarketplaceIdList' => array(
          'location'=>'aws.query',
          'type' => 'array'
        ),
        'StartDate' => array(
          'type' => array(
            'object',
            'string',
            'integer',
          ),
          'format' => 'date-time',
          'location' => 'aws.query'
        ),
        'EndDate' => array(
          'type' => array(
            'object',
            'string',
            'integer',
          ),
          'format' => 'date-time',
          'location' => 'aws.query'
        ),
        'ReportOptions' => array(
          'type'=>'string',
          'location' => 'aws.query'
        )
      )
    ),

    'GetReport' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\Command\\QueryCommand',
      'responseClass' => 'GetReportResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'GetReport',
          'static' => false
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'ReportId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true
        )
      )

    ),

    'GetReportRequestList' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\Command\\QueryCommand',
      'responseClass' => 'GetReportRequestListResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'GetReportRequestList',
          'static' => false
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'MaxCount' => array(
          'location' => 'aws.query',
          'type' => 'integer',
          'minimum' => 1,
          'maximum' => 100
        ),
        'ReportTypeList' => array(
          'location' => 'aws.query',
          'type' => 'array',
          'sentAs'=>'ReportTypeList.Type',
          'items' => array(
            'name'=>'ReportType',
            'type'=>'string',
            'minLength'=>1,
            'maxLength'=>255
          )
        ),
        'ReportRequestIdList' => array(
          'location' => 'aws.query',
          'type' => 'array',
          'sentAs' => 'ReportRequestIdList.Id',
          'items' => array(
            'name' => 'ReportRequestId',
            'type' => 'string',
            'minLength' => 1,
            'maxLength' => 255
          )
        ),
        'ReportProcessingStatusList' => array(
          'location' => 'aws.query',
          'type' => 'array',
          'sentAs' => 'ReportProcessingStatusList.Status',
          'items' => array(
            'name' => 'Status',
            'type' => 'string',
            'minLength' => 1,
            'maxLength' => 255,
            'enum' => $reportRequestStatusEnumeration
          )
        ),
        'RequestedFromDate' => array(
          'type' => array(
            'object',
            'string',
            'integer',
          ),
          'format' => 'date-time',
          'location' => 'aws.query'
        ),
        'RequestedToDate' => array(
          'type' => array(
            'object',
            'string',
            'integer',
          ),
          'format' => 'date-time',
          'location' => 'aws.query'
        )
      )
    ),

    'GetReportRequestListByNextToken' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'responseClass' => 'GetReportRequestListResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'GetReportRequestListByNextToken',
          'static' => false
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'NextToken' => array(
          'location' =>'aws.query',
          'type' => 'string'
        )
      )
    ),

    'GetReport' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'GetReport',
          'static' => false
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'ReportId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'ReportId'
        )
      )
    ),

    'GetReportList' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'responseClass' => 'GetReportListResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'GetReportList',
          'static' => false
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'MaxCount' => array(
          'location' => 'aws.query',
          'type' => 'integer',
          'minimum' => 1,
          'maximum' => 100,
          'default' => 100
        ),
        'ReportTypeList' => array(
          'location' => 'aws.query',
          'type' => 'array',
          'sentAs'=>'ReportTypeList.Type',
          'items' => array(
            'name'=>'ReportType',
            'type'=>'string',
            'minLength'=>1,
            'maxLength'=>255,
            'enum' => $reportTypeEnumeration
          )
        ),
        'Acknowledged' => array(
          'location' => 'aws.query',
          'type' => 'string'
        ),
        'AvailableFromDate' => array(
          'type' => array(
            'object',
            'string',
            'integer',
          ),
          'format' => 'date-time',
          'location' => 'aws.query'
        ),
        'AvailableToDate' => array(
          'type' => array(
            'object',
            'string',
            'integer',
          ),
          'format' => 'date-time',
          'location' => 'aws.query'
        ),
        'ReportRequestIdList' => array(
          'location' => 'aws.query',
          'type' => 'array',
          'sentAs' => 'ReportRequestIdList.Id',
          'items' => array(
            'name' => 'Status',
            'type' => 'string',
            'minLength' => 1,
            'maxLength' => 255
          )
        ),
        'NextToken' => array(
          'location' =>'aws.query',
          'type' => 'string'
        )
      )
    ),

    'GetReportListByNextToken' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'responseClass' => 'GetReportListResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'GetReportListByNextToken',
          'static' => false
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'NextToken' => array(
          'location' =>'aws.query',
          'type' => 'string'
        )
      )
    ),

    'ManageReportSchedule' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'responseClass' => 'ManageReportScheduleResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'ManageReportSchedule',
          'static' => true,
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'ReportType' => array(
          'location' => 'aws.query',
          'required' => true,
          'type' => 'string',
          'enum' => $reportTypeEnumeration // @todo see docs and make a more limited enumeration
        ),
        'Schedule' => array(
          'location'=>'aws.query',
          'type' => 'string',
          'required'=>true,
          'enum' => $reportScheduleEnumeration
        ),
        'ScheduleDate' => array(
          'type' => array(
            'object',
            'string',
            'integer',
          ),
          'format' => 'date-time',
          'location' => 'aws.query'
        )
      )
    ),

    'UpdateReportAcknowledgements' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'responseClass' => 'UpdateReportAcknowledgementsResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          'required' => true,
          'default' => 'UpdateReportAcknowledgements',
          'static' => false
        ),
        'MerchantId' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'ReportIdList' => array(
          'location' => 'aws.query',
          'type' => 'array',
          'sentAs' => 'ReportIdList.Id',
          'items' => array(
            'name' => 'id',
            'type' => 'string'
          )
        ),
        'Acknowledged' => array(
          'location' => 'aws.query',
          'type' => 'string',
          'required' => true,
          'default' => true
        )

      )
    )
  ),

  'models' => array(

    'RequestReportResponse' => array(
      'type' => 'object',
      'location' => 'xml',
      'properties' => array(
        'RequestReportResult'=>array(
          'type'=>'object',
          'location'=>'xml',
        ),
        'ResponseMetadata' => array(
          'type'=>'object',
          'location'=>'xml'
        )
      )
    ),

    'GetReportListResponse' => array(
      'type' => 'object',
      'location' => 'xml',
      //'additionalProperties' => false,
      'properties' => array(
        'GetReportListResult' => array(
          'type' => 'object',
          'location' => 'xml',
          'properties' => array(
            'ReportInfo' => array(
              'type' => 'array',
              //'location'=>'xml',
              'items' => array(
                'type' => 'object',
                //'location' => 'xml',
                'properties' => array(
                  'ReportId' => array('type'=>'integer','location'=>'xml'),
                  'ReportType'  => array('type'=>'string', 'location'=>'xml'),
                  'ReportRequestId' => array('type' => 'integer', 'location'=>'xml'),
                  'AvailableDate' => array('type'=>'string', 'location'=>'xml'),
                  'Acknowledged' => array('type' => 'boolean')
                )
              )
            )
          )
        ),
        'ResponseMetadata' => array(
          'type' => 'object',
          'location'=>'xml'
        )
      )
    ),

    'GetReportRequestListResponse' => array(
      'type' => 'object',
      'location' => 'xml',
      'additionalProperties' => false,
      'properties' => array(
        'GetReportRequestListResult' => array(
          'type' => 'object',
          'location'=>'xml',
          'properties' => array(
            'ReportRequestInfo' => array(
              'type' => 'array',
              'location'=>'xml',
              'additionalProperties' => false,
              'items' => array(
                'ReportRequestId' => array('type'=>'numeric', 'location'=>'xml'),
                'ReportType'  => array('type'=>'string', 'location'=>'xml'),
                'StartDate' => array('type'=>'string', 'location'=>'xml'),
                'EndDate' => array('type'=>'string', 'location'=>'xml'),
                'Scheduled' => array('type'=>'boolean', 'location'=>'xml'),
              )
            )
          )
        ),
        'ResponseMetadata' => array(
          'type' => 'object',
          'location'=>'xml'
        )
      )
    ),

    'ManageReportScheduleResponse' => array(
      'type' => 'object',
      'location' => 'xml',
      'properties'=>array(
        'ManageReportScheduleResult' => array(
          'type' => 'object',
          'location' => 'xml',
//          'properties' => array(
//            'Count' => array(
//              'type' => 'string'
//            ),
//            'ReportType' => array('type' => 'string'),
//            'Schedule' => array('type' => 'string'),
//            'ScheduledDate' => array('type' => 'string')
//          )
        ),
        'ResponseMetadata' => array('type' => 'object', 'location'=>'xml')
      )
    ),

    'UpdateReportAcknowledgementsResponse' => array(
      'type' => 'object',
      'location' => 'xml',
      'properties' => array(
        'UpdateReportAcknowledgementsResult' => array(
          'type' => 'object',
          'location' => 'xml',
          'properties' => array(
            'Count' => array(
              'location' => 'xml',
              'type' => 'integer'
            ),
            'ReportInfo' => array(
              'location' => 'xml',
              'type' => 'array',
              'items' => array(
                'ReportId' => array('type'=>'numeric'),
                'ReportRequestId' => array('type'=>'numeric'),
                'ReportType' => array('type'=>'string', 'enum' => $reportTypeEnumeration),
                'AvailableDate' => array('type'=>'string'),
                'Acknowledged' => array('type'=>'boolean'),
                'AcknowledgedDate' => array('type' => 'string'),
              )
            )
          )
        ),
        'ResponseMetadata' => array(
          'type' => 'object',
          'location'=>'xml'
        )
      )
    )
  ),

  'iterators' => array(
    'operations' => array(
      'GetReportList' => array(
        'token_param' => 'NextToken',
        'token_key' => 'GetReportListResult/NextToken',
        'limit_key' => 'MaxRecords',
        'result_key' => 'GetReportListResult/ReportInfo',
      ),
      'GetReportRequestList' => array(
        'token_param' => 'NextToken',
        'token_key' => 'GetReportRequestListResult/NextToken',
        'limit_key' => 'MaxCount',
        'result_key' => 'GetReportRequestListResult/ReportRequestInfo',
      )
    )
  )
);