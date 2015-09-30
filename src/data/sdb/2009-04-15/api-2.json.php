<?php
// This file was auto-generated from sdk-root/src/data/sdb/2009-04-15/api-2.json
return [ 'metadata' => [ 'apiVersion' => '2009-04-15', 'endpointPrefix' => 'sdb', 'serviceFullName' => 'Amazon SimpleDB', 'signatureVersion' => 'v2', 'xmlNamespace' => 'http://sdb.amazonaws.com/doc/2009-04-15/', 'protocol' => 'query', ], 'operations' => [ 'BatchDeleteAttributes' => [ 'name' => 'BatchDeleteAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchDeleteAttributesRequest', ], ], 'BatchPutAttributes' => [ 'name' => 'BatchPutAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'BatchPutAttributesRequest', ], 'errors' => [ [ 'shape' => 'DuplicateItemName', 'error' => [ 'code' => 'DuplicateItemName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidParameterValue', 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NoSuchDomain', 'error' => [ 'code' => 'NoSuchDomain', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberItemAttributesExceeded', 'error' => [ 'code' => 'NumberItemAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberDomainAttributesExceeded', 'error' => [ 'code' => 'NumberDomainAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberDomainBytesExceeded', 'error' => [ 'code' => 'NumberDomainBytesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberSubmittedItemsExceeded', 'error' => [ 'code' => 'NumberSubmittedItemsExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberSubmittedAttributesExceeded', 'error' => [ 'code' => 'NumberSubmittedAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], ], ], 'CreateDomain' => [ 'name' => 'CreateDomain', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateDomainRequest', ], 'errors' => [ [ 'shape' => 'InvalidParameterValue', 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberDomainsExceeded', 'error' => [ 'code' => 'NumberDomainsExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DeleteAttributes' => [ 'name' => 'DeleteAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteAttributesRequest', ], 'errors' => [ [ 'shape' => 'InvalidParameterValue', 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NoSuchDomain', 'error' => [ 'code' => 'NoSuchDomain', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AttributeDoesNotExist', 'error' => [ 'code' => 'AttributeDoesNotExist', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DeleteDomain' => [ 'name' => 'DeleteDomain', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteDomainRequest', ], 'errors' => [ [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'DomainMetadata' => [ 'name' => 'DomainMetadata', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DomainMetadataRequest', ], 'output' => [ 'shape' => 'DomainMetadataResult', 'resultWrapper' => 'DomainMetadataResult', ], 'errors' => [ [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NoSuchDomain', 'error' => [ 'code' => 'NoSuchDomain', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'GetAttributes' => [ 'name' => 'GetAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetAttributesRequest', ], 'output' => [ 'shape' => 'GetAttributesResult', 'resultWrapper' => 'GetAttributesResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValue', 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NoSuchDomain', 'error' => [ 'code' => 'NoSuchDomain', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'ListDomains' => [ 'name' => 'ListDomains', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListDomainsRequest', ], 'output' => [ 'shape' => 'ListDomainsResult', 'resultWrapper' => 'ListDomainsResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValue', 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidNextToken', 'error' => [ 'code' => 'InvalidNextToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], 'PutAttributes' => [ 'name' => 'PutAttributes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutAttributesRequest', ], 'errors' => [ [ 'shape' => 'InvalidParameterValue', 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NoSuchDomain', 'error' => [ 'code' => 'NoSuchDomain', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberDomainAttributesExceeded', 'error' => [ 'code' => 'NumberDomainAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberDomainBytesExceeded', 'error' => [ 'code' => 'NumberDomainBytesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NumberItemAttributesExceeded', 'error' => [ 'code' => 'NumberItemAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'AttributeDoesNotExist', 'error' => [ 'code' => 'AttributeDoesNotExist', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], ], ], 'Select' => [ 'name' => 'Select', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'SelectRequest', ], 'output' => [ 'shape' => 'SelectResult', 'resultWrapper' => 'SelectResult', ], 'errors' => [ [ 'shape' => 'InvalidParameterValue', 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidNextToken', 'error' => [ 'code' => 'InvalidNextToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidNumberPredicates', 'error' => [ 'code' => 'InvalidNumberPredicates', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidNumberValueTests', 'error' => [ 'code' => 'InvalidNumberValueTests', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'InvalidQueryExpression', 'error' => [ 'code' => 'InvalidQueryExpression', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'MissingParameter', 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'NoSuchDomain', 'error' => [ 'code' => 'NoSuchDomain', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'RequestTimeout', 'error' => [ 'code' => 'RequestTimeout', 'httpStatusCode' => 408, 'senderFault' => true, ], 'exception' => true, ], [ 'shape' => 'TooManyRequestedAttributes', 'error' => [ 'code' => 'TooManyRequestedAttributes', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ], ], ], 'shapes' => [ 'Attribute' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'AlternateNameEncoding' => [ 'shape' => 'String', ], 'Value' => [ 'shape' => 'String', ], 'AlternateValueEncoding' => [ 'shape' => 'String', ], ], ], 'AttributeDoesNotExist' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'AttributeDoesNotExist', 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'AttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Attribute', 'locationName' => 'Attribute', ], 'flattened' => true, ], 'AttributeNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', 'locationName' => 'AttributeName', ], 'flattened' => true, ], 'BatchDeleteAttributesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'Items', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], 'Items' => [ 'shape' => 'DeletableItemList', ], ], ], 'BatchPutAttributesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'Items', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], 'Items' => [ 'shape' => 'ReplaceableItemList', ], ], ], 'Boolean' => [ 'type' => 'boolean', ], 'CreateDomainRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], ], ], 'DeletableItem' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'String', 'locationName' => 'ItemName', ], 'Attributes' => [ 'shape' => 'AttributeList', ], ], ], 'DeletableItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeletableItem', 'locationName' => 'Item', ], 'flattened' => true, ], 'DeleteAttributesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'ItemName', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], 'ItemName' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'AttributeList', ], 'Expected' => [ 'shape' => 'UpdateCondition', ], ], ], 'DeleteDomainRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], ], ], 'DomainMetadataRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], ], ], 'DomainMetadataResult' => [ 'type' => 'structure', 'members' => [ 'ItemCount' => [ 'shape' => 'Integer', ], 'ItemNamesSizeBytes' => [ 'shape' => 'Long', ], 'AttributeNameCount' => [ 'shape' => 'Integer', ], 'AttributeNamesSizeBytes' => [ 'shape' => 'Long', ], 'AttributeValueCount' => [ 'shape' => 'Integer', ], 'AttributeValuesSizeBytes' => [ 'shape' => 'Long', ], 'Timestamp' => [ 'shape' => 'Integer', ], ], ], 'DomainNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', 'locationName' => 'DomainName', ], 'flattened' => true, ], 'DuplicateItemName' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'DuplicateItemName', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Float' => [ 'type' => 'float', ], 'GetAttributesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'ItemName', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], 'ItemName' => [ 'shape' => 'String', ], 'AttributeNames' => [ 'shape' => 'AttributeNameList', ], 'ConsistentRead' => [ 'shape' => 'Boolean', ], ], ], 'GetAttributesResult' => [ 'type' => 'structure', 'members' => [ 'Attributes' => [ 'shape' => 'AttributeList', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'InvalidNextToken' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'InvalidNextToken', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidNumberPredicates' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'InvalidNumberPredicates', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidNumberValueTests' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'InvalidNumberValueTests', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidParameterValue' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'InvalidParameterValue', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'InvalidQueryExpression' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'InvalidQueryExpression', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'Item' => [ 'type' => 'structure', 'required' => [ 'Name', 'Attributes', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'AlternateNameEncoding' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'AttributeList', ], ], ], 'ItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Item', 'locationName' => 'Item', ], 'flattened' => true, ], 'ListDomainsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxNumberOfDomains' => [ 'shape' => 'Integer', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListDomainsResult' => [ 'type' => 'structure', 'members' => [ 'DomainNames' => [ 'shape' => 'DomainNameList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'Long' => [ 'type' => 'long', ], 'MissingParameter' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'MissingParameter', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'NoSuchDomain' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'NoSuchDomain', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'NumberDomainAttributesExceeded' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'NumberDomainAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'NumberDomainBytesExceeded' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'NumberDomainBytesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'NumberDomainsExceeded' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'NumberDomainsExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'NumberItemAttributesExceeded' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'NumberItemAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'NumberSubmittedAttributesExceeded' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'NumberSubmittedAttributesExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'NumberSubmittedItemsExceeded' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'NumberSubmittedItemsExceeded', 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'PutAttributesRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'ItemName', 'Attributes', ], 'members' => [ 'DomainName' => [ 'shape' => 'String', ], 'ItemName' => [ 'shape' => 'String', ], 'Attributes' => [ 'shape' => 'ReplaceableAttributeList', ], 'Expected' => [ 'shape' => 'UpdateCondition', ], ], ], 'ReplaceableAttribute' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Value' => [ 'shape' => 'String', ], 'Replace' => [ 'shape' => 'Boolean', ], ], ], 'ReplaceableAttributeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReplaceableAttribute', 'locationName' => 'Attribute', ], 'flattened' => true, ], 'ReplaceableItem' => [ 'type' => 'structure', 'required' => [ 'Name', 'Attributes', ], 'members' => [ 'Name' => [ 'shape' => 'String', 'locationName' => 'ItemName', ], 'Attributes' => [ 'shape' => 'ReplaceableAttributeList', ], ], ], 'ReplaceableItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ReplaceableItem', 'locationName' => 'Item', ], 'flattened' => true, ], 'RequestTimeout' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'RequestTimeout', 'httpStatusCode' => 408, 'senderFault' => true, ], 'exception' => true, ], 'SelectRequest' => [ 'type' => 'structure', 'required' => [ 'SelectExpression', ], 'members' => [ 'SelectExpression' => [ 'shape' => 'String', ], 'NextToken' => [ 'shape' => 'String', ], 'ConsistentRead' => [ 'shape' => 'Boolean', ], ], ], 'SelectResult' => [ 'type' => 'structure', 'members' => [ 'Items' => [ 'shape' => 'ItemList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'String' => [ 'type' => 'string', ], 'TooManyRequestedAttributes' => [ 'type' => 'structure', 'members' => [ 'BoxUsage' => [ 'shape' => 'Float', ], ], 'error' => [ 'code' => 'TooManyRequestedAttributes', 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'UpdateCondition' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'String', ], 'Value' => [ 'shape' => 'String', ], 'Exists' => [ 'shape' => 'Boolean', ], ], ], ],];
