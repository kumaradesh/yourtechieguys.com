local kong = kong
local BasePlugin = require "kong.plugins.base_plugin"
local CustomApiKeyHandler = BasePlugin:extend()

CustomApiKeyHandler.PRIORITY = 1000
CustomApiKeyHandler.VERSION = "1.0.0"

-- Plugin constructor
function CustomApiKeyHandler:new()
  CustomApiKeyHandler.super.new(self, "custom-api-key-plugin")
end

function CustomApiKeyHandler:access(conf)
  local request = kong.request
  local response = kong.response

  local api_key_header = conf.api_key_header or "apikey"
  local api_key_value = conf.api_key_value

  -- Validate the incoming API key from the request
  local request_api_key = request.get_header(api_key_header)

  if not request_api_key then
    return response.exit(400, { message = "Missing API key header" })
  end

  if request_api_key ~= api_key_value then
    return response.exit(401, { message = "Invalid API key" })
  end

end

return CustomApiKeyHandler