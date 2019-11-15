# Yahoo!広告API（検索）のOpenApi定義から自動生成したApiClient

## 使い方

### 準備

openapi-generatorをグローバルにインストールする

```bash
$ npm install @openapitools/openapi-generator-cli -g
```

### 自動生成

```bash
$ openapi-generator generate -i ./ads-search-api-documents/design/v0/Route.yaml -g php -o ./generated -c openapi-generator-config.json
```
