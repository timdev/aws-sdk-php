<?php
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
  'resultWrapped' => true,
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
    )
  ),
  'operations' => array(
    'GetReport' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
//      'responseClass' => 'GetReportResponse',
//      'responseType' => 'model',
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
        'Acknowledged' => array(
          'location' => 'aws.query',
          'type' => 'boolean'
        ),
        'AvailableFromDate' => array(
          'location' => 'aws.query',
          'type' => 'object',
          'instanceOf' => '\\DateTime'
        ),
        'AvailableToDate' => array(
          'location' => 'aws.query',
          'type' => 'object',
          'instanceOf' => '\\DateTime'
        ),
        'ReportRequestIdList' => array(
          'location' => 'aws.query',
          'type' => 'array'
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
//        'MaxCount' => array(
//          'location' => 'aws.query',
//          'type' => 'integer',
//          'minimum' => 1,
//          'maximum' => 100
//        ),
//        'ReportTypeList' => array(
//          'location' => 'aws.query',
//          'type' => 'array',
//          'sentAs'=>'ReportTypeList.Type',
//          'items' => array(
//            'name'=>'ReportType',
//            'type'=>'string',
//            'minLength'=>1,
//            'maxLength'=>255
//          )
//        ),
//        'Acknowledged' => array(
//          'location' => 'aws.query',
//          'type' => 'boolean'
//        ),
//        'AvailableFromDate' => array(
//          'location' => 'aws.query',
//          'type' => 'object',
//          'instanceOf' => '\\DateTime'
//        ),
//        'AvailableToDate' => array(
//          'location' => 'aws.query',
//          'type' => 'object',
//          'instanceOf' => '\\DateTime'
//        ),
//        'ReportRequestIdList' => array(
//          'location' => 'aws.query',
//          'type' => 'array'
//        ),
        'NextToken' => array(
          'location' =>'aws.query',
          'type' => 'string'
        )
      )
    )
  ),
  'models' => array(
    'GetReportListResponse' => array(
      'type' => 'object',
      'location' => 'xml',
      //'additionalProperties' => false,
      'properties' => array(
        'GetReportListResult' => array(
          'type' => 'object',
          /**
           * None of the following is even useful, because resultWrapped makes guzzle skip all the filtering, etc.
           * Revisit some time, but for now, it keeps things simple.
           */
//          'location' => 'xml',  // necessary to filter values and do things like make bools into bools.
//          'properties' => array(
//            'HasNext' => array(
//              'type' => 'boolean',
//            ),
//            'NextToken' => array(
//              'type' => 'string',
//            ),
//            'ReportInfo' => array(
//              'name'=>'Reports',
//              'type' => 'array',
//              'location'=>'xml',
//              'items' => array(
//                'name' => 'ReportInfo',
//                'location' =>'xml',
//                'type' => 'object',
//                'sentAs' => 'ReportInfo',
//                'additionalProperties' => false,
//                'properties' => array(
//                  'ReportId' => array('type' => 'numeric', 'location'=>'xml'),
//                  'ReportRequestId' => array('type' => 'numeric'),
//                  'ReportType' => array('type' => 'string'),
//                  'AvailableDate' => array('type' => 'object', 'format'=>'date-time'),
//                  'Acknowledged' => array('type' => 'boolean')
//                )
//              )
//            )
//          )
        ),
        'ResponseMetadata' => array(
          'type' => 'object',
          'location'=>'xml'
//          'properties' => array(
//            'ReportRequestId' => array(
//              'type' => 'string'
//            )
//          )
        )
      )
    )
  ),

  'iterators' => array(
    'operations' => array(
      'GetReportList' => array(
        'token_param' => 'NextToken',
        'token_key' => 'NextToken',
        'limit_key' => 'MaxRecords',
        'result_key' => 'ReportInfo',
      )
    )
  )

);