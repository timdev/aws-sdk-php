<?php
return array(
  'apiVersion' => '2009-01-01',
  'endpointPrefix' => '',
  'serviceFullName' => 'Amazon MWS Reports API',
  'serviceAbbreviation' => 'MWS Reports',
  //'serviceType' => 'aws.query',
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
    'GetReportList' => array(
      'httpMethod' => 'POST',
      'uri' => '',
      'class' => 'Aws\\Common\\Command\\QueryCommand',
      'responseClass' => 'GetReportListResponse',
      'responseType' => 'model',
      'parameters' => array(
        'Action' => array(
          'location' => 'aws.query',
          //'name'=>'Action',
          //'required' => true,
          'default' => 'GetReportList',
          'static' => true
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
        )
      )

    )
  ),
  'models' => array(


    'GetReportListResponse' => array(
      'type' => 'object',
      'additionalProperties' => true,
      'properties' => array(
        'GetReportListResult' => array(
          'type' => 'object',
          'location' => 'xml',
          'properties' => array(
            'HasNext' => array(
              'type' => 'boolean'
            ),
            'NextToken' => array(
              'type' => 'string'
            ),
            'ReportInfo' => array(
              'name'=>'Reports',
              'type' => 'array',
              'items' => array(
                'name' => 'ReportInfo',
                'type' => 'Object',
                'sentAs' => 'ReportInfo',
                'additionalProperties' => true,
         //       'data' => array('xmlFlattened' => true),
                'properties' => array(
                  'ReportId' => array('type' => 'integer'),
                  'ReportRequestId' => array('type' => 'integer'),
                  'ReportType' => array('type' => 'string'),
                  'AvailableDate' => array('type' => 'string'),
                  'Acknowledged' => array('type' => 'boolean')
                )
              )
            )
          )
        )
      )
    )
  )

);