<?php
return array(
  'apiVersion' => '2009-01-01',
  'endpointPrefix' => '',
  'serviceFullName' => 'Amazon MWS Reports API',
  'serviceAbbreviation' => 'MWS Reports',
  'serviceType' => 'aws.query',
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
      'httpMethod' => 'GET',
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
          'location' => 'query',
          'type' => 'string',
          'required' => true,
          'sentAs' => 'SellerId'
        ),
        'MaxCount' => array(
          'location' => 'query',
          'type' => 'integer',
          'minimum' => 1,
          'maximum' => 100
        ),
        'ReportTypeList' => array(
          'location' => 'query',
          'type' => 'array'
        ),
        'Acknowledged' => array(
          'location' => 'query',
          'type' => 'boolean'
        ),
        'AvailableFromDate' => array(
          'location' => 'query',
          'type' => 'object',
          'instanceOf' => '\\DateTime'
        ),
        'AvailableToDate' => array(
          'location' => 'query',
          'type' => 'object',
          'instanceOf' => '\\DateTime'
        ),
        'ReportRequestIdList' => array(
          'location' => 'query',
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