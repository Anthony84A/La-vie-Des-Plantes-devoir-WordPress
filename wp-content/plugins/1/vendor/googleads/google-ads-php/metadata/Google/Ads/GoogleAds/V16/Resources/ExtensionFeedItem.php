<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/extension_feed_item.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Resources;

class ExtensionFeedItem
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v16/enums/parental_status_type.protogoogle.ads.googleads.v16.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
"com.google.ads.googleads.v16.enumsBParentalStatusTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
@google/ads/googleads/v16/enums/product_channel_exclusivity.protogoogle.ads.googleads.v16.enums"�
ProductChannelExclusivityEnum"`
ProductChannelExclusivity
UNSPECIFIED 
UNKNOWN
SINGLE_CHANNEL
MULTI_CHANNELB�
"com.google.ads.googleads.v16.enumsBProductChannelExclusivityProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
3google/ads/googleads/v16/enums/minute_of_hour.protogoogle.ads.googleads.v16.enums"s
MinuteOfHourEnum"_
MinuteOfHour
UNSPECIFIED 
UNKNOWN
ZERO
FIFTEEN

THIRTY

FORTY_FIVEB�
"com.google.ads.googleads.v16.enumsBMinuteOfHourProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
+google/ads/googleads/v16/enums/device.protogoogle.ads.googleads.v16.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
"com.google.ads.googleads.v16.enumsBDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
3google/ads/googleads/v16/enums/age_range_type.protogoogle.ads.googleads.v16.enums"�
AgeRangeTypeEnum"�
AgeRangeType
UNSPECIFIED 
UNKNOWN
AGE_RANGE_18_24��
AGE_RANGE_25_34��
AGE_RANGE_35_44��
AGE_RANGE_45_54��
AGE_RANGE_55_64��
AGE_RANGE_65_UP��
AGE_RANGE_UNDETERMINED��B�
"com.google.ads.googleads.v16.enumsBAgeRangeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
@google/ads/googleads/v16/enums/location_group_radius_units.protogoogle.ads.googleads.v16.enums"�
LocationGroupRadiusUnitsEnum"`
LocationGroupRadiusUnits
UNSPECIFIED 
UNKNOWN

METERS	
MILES
MILLI_MILESB�
"com.google.ads.googleads.v16.enumsBLocationGroupRadiusUnitsProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
;google/ads/googleads/v16/enums/product_category_level.protogoogle.ads.googleads.v16.enums"�
ProductCategoryLevelEnum"p
ProductCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
"com.google.ads.googleads.v16.enumsBProductCategoryLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
1google/ads/googleads/v16/common/feed_common.protogoogle.ads.googleads.v16.common"c
Money
currency_code (	H �
amount_micros (H�B
_currency_codeB
_amount_microsB�
#com.google.ads.googleads.v16.commonBFeedCommonProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
>google/ads/googleads/v16/enums/webpage_condition_operand.protogoogle.ads.googleads.v16.enums"�
WebpageConditionOperandEnum"�
WebpageConditionOperand
UNSPECIFIED 
UNKNOWN
URL
CATEGORY

PAGE_TITLE
PAGE_CONTENT
CUSTOM_LABELB�
"com.google.ads.googleads.v16.enumsBWebpageConditionOperandProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
0google/ads/googleads/v16/enums/day_of_week.protogoogle.ads.googleads.v16.enums"�
DayOfWeekEnum"�
	DayOfWeek
UNSPECIFIED 
UNKNOWN

MONDAY
TUESDAY
	WEDNESDAY
THURSDAY

FRIDAY
SATURDAY

SUNDAYB�
"com.google.ads.googleads.v16.enumsBDayOfWeekProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
4google/ads/googleads/v16/enums/product_channel.protogoogle.ads.googleads.v16.enums"[
ProductChannelEnum"E
ProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
"com.google.ads.googleads.v16.enumsBProductChannelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
?google/ads/googleads/v16/enums/price_extension_price_unit.protogoogle.ads.googleads.v16.enums"�
PriceExtensionPriceUnitEnum"�
PriceExtensionPriceUnit
UNSPECIFIED 
UNKNOWN
PER_HOUR
PER_DAY
PER_WEEK
	PER_MONTH
PER_YEAR
	PER_NIGHTB�
"com.google.ads.googleads.v16.enumsBPriceExtensionPriceUnitProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
3google/ads/googleads/v16/enums/extension_type.protogoogle.ads.googleads.v16.enums"�
ExtensionTypeEnum"�
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUT	
IMAGEB�
"com.google.ads.googleads.v16.enumsBExtensionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
>google/ads/googleads/v16/enums/hotel_date_selection_type.protogoogle.ads.googleads.v16.enums"~
HotelDateSelectionTypeEnum"`
HotelDateSelectionType
UNSPECIFIED 
UNKNOWN
DEFAULT_SELECTION2
USER_SELECTED3B�
"com.google.ads.googleads.v16.enumsBHotelDateSelectionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
?google/ads/googleads/v16/enums/webpage_condition_operator.protogoogle.ads.googleads.v16.enums"r
WebpageConditionOperatorEnum"R
WebpageConditionOperator
UNSPECIFIED 
UNKNOWN

EQUALS
CONTAINSB�
"com.google.ads.googleads.v16.enumsBWebpageConditionOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Agoogle/ads/googleads/v16/enums/promotion_extension_occasion.protogoogle.ads.googleads.v16.enums"�
PromotionExtensionOccasionEnum"�
PromotionExtensionOccasion
UNSPECIFIED 
UNKNOWN
	NEW_YEARS
CHINESE_NEW_YEAR
VALENTINES_DAY

EASTER
MOTHERS_DAY
FATHERS_DAY
	LABOR_DAY
BACK_TO_SCHOOL	
	HALLOWEEN

BLACK_FRIDAY
CYBER_MONDAY
	CHRISTMAS

BOXING_DAY
INDEPENDENCE_DAY
NATIONAL_DAY
END_OF_SEASON
WINTER_SALE
SUMMER_SALE
	FALL_SALE
SPRING_SALE
RAMADAN
EID_AL_FITR
EID_AL_ADHA
SINGLES_DAY

WOMENS_DAY
HOLI
PARENTS_DAY
ST_NICHOLAS_DAY
CARNIVAL
EPIPHANY
ROSH_HASHANAH 
PASSOVER!
HANUKKAH"

DIWALI#
NAVRATRI$
SONGKRAN%
YEAR_END_GIFT&B�
"com.google.ads.googleads.v16.enumsBPromotionExtensionOccasionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
6google/ads/googleads/v16/common/custom_parameter.protogoogle.ads.googleads.v16.common"I
CustomParameter
key (	H �
value (	H�B
_keyB
_valueB�
#com.google.ads.googleads.v16.commonBCustomParameterProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
7google/ads/googleads/v16/enums/content_label_type.protogoogle.ads.googleads.v16.enums"�
ContentLabelTypeEnum"�
ContentLabelType
UNSPECIFIED 
UNKNOWN
SEXUALLY_SUGGESTIVE
BELOW_THE_FOLD
PARKED_DOMAIN
JUVENILE
	PROFANITY
TRAGEDY	
VIDEO	
VIDEO_RATING_DV_G

VIDEO_RATING_DV_PG
VIDEO_RATING_DV_T
VIDEO_RATING_DV_MA
VIDEO_NOT_YET_RATED
EMBEDDED_VIDEO
LIVE_STREAMING_VIDEO
SOCIAL_ISSUESB�
"com.google.ads.googleads.v16.enumsBContentLabelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
.google/ads/googleads/v16/enums/app_store.protogoogle.ads.googleads.v16.enums"[
AppStoreEnum"K
AppStore
UNSPECIFIED 
UNKNOWN
APPLE_ITUNES
GOOGLE_PLAYB�
"com.google.ads.googleads.v16.enumsBAppStoreProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
6google/ads/googleads/v16/enums/income_range_type.protogoogle.ads.googleads.v16.enums"�
IncomeRangeTypeEnum"�
IncomeRangeType
UNSPECIFIED 
UNKNOWN
INCOME_RANGE_0_50��
INCOME_RANGE_50_60��
INCOME_RANGE_60_70��
INCOME_RANGE_70_80��
INCOME_RANGE_80_90��
INCOME_RANGE_90_UP��
INCOME_RANGE_UNDETERMINED��B�
"com.google.ads.googleads.v16.enumsBIncomeRangeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
6google/ads/googleads/v16/enums/product_condition.protogoogle.ads.googleads.v16.enums"l
ProductConditionEnum"T
ProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
"com.google.ads.googleads.v16.enumsBProductConditionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Jgoogle/ads/googleads/v16/enums/promotion_extension_discount_modifier.protogoogle.ads.googleads.v16.enums"w
&PromotionExtensionDiscountModifierEnum"M
"PromotionExtensionDiscountModifier
UNSPECIFIED 
UNKNOWN	
UP_TOB�
"com.google.ads.googleads.v16.enumsB\'PromotionExtensionDiscountModifierProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
5google/ads/googleads/v16/enums/interaction_type.protogoogle.ads.googleads.v16.enums"R
InteractionTypeEnum";
InteractionType
UNSPECIFIED 
UNKNOWN

CALLS�>B�
"com.google.ads.googleads.v16.enumsBInteractionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
9google/ads/googleads/v16/enums/price_extension_type.protogoogle.ads.googleads.v16.enums"�
PriceExtensionTypeEnum"�
PriceExtensionType
UNSPECIFIED 
UNKNOWN

BRANDS

EVENTS
	LOCATIONS
NEIGHBORHOODS
PRODUCT_CATEGORIES
PRODUCT_TIERS
SERVICES
SERVICE_CATEGORIES	
SERVICE_TIERS
B�
"com.google.ads.googleads.v16.enumsBPriceExtensionTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
5google/ads/googleads/v16/enums/feed_item_status.protogoogle.ads.googleads.v16.enums"^
FeedItemStatusEnum"H
FeedItemStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBFeedItemStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
;google/ads/googleads/v16/enums/app_payment_model_type.protogoogle.ads.googleads.v16.enums"X
AppPaymentModelTypeEnum"=
AppPaymentModelType
UNSPECIFIED 
UNKNOWN
PAIDB�
"com.google.ads.googleads.v16.enumsBAppPaymentModelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
0google/ads/googleads/v16/enums/gender_type.protogoogle.ads.googleads.v16.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
"com.google.ads.googleads.v16.enumsBGenderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Cgoogle/ads/googleads/v16/enums/product_custom_attribute_index.protogoogle.ads.googleads.v16.enums"�
ProductCustomAttributeIndexEnum"w
ProductCustomAttributeIndex
UNSPECIFIED 
UNKNOWN

INDEX0

INDEX1

INDEX2	

INDEX3


INDEX4B�
"com.google.ads.googleads.v16.enumsB ProductCustomAttributeIndexProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/enums/keyword_match_type.protogoogle.ads.googleads.v16.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
"com.google.ads.googleads.v16.enumsBKeywordMatchTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Dgoogle/ads/googleads/v16/enums/call_conversion_reporting_state.protogoogle.ads.googleads.v16.enums"�
 CallConversionReportingStateEnum"�
CallConversionReportingState
UNSPECIFIED 
UNKNOWN
DISABLED,
(USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION-
)USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTIONB�
"com.google.ads.googleads.v16.enumsB!CallConversionReportingStateProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/enums/product_type_level.protogoogle.ads.googleads.v16.enums"�
ProductTypeLevelEnum"l
ProductTypeLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3	

LEVEL4


LEVEL5B�
"com.google.ads.googleads.v16.enumsBProductTypeLevelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
;google/ads/googleads/v16/enums/proximity_radius_units.protogoogle.ads.googleads.v16.enums"k
ProximityRadiusUnitsEnum"O
ProximityRadiusUnits
UNSPECIFIED 
UNKNOWN	
MILES

KILOMETERSB�
"com.google.ads.googleads.v16.enumsBProximityRadiusUnitsProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Dgoogle/ads/googleads/v16/enums/price_extension_price_qualifier.protogoogle.ads.googleads.v16.enums"�
 PriceExtensionPriceQualifierEnum"^
PriceExtensionPriceQualifier
UNSPECIFIED 
UNKNOWN
FROM	
UP_TO
AVERAGEB�
"com.google.ads.googleads.v16.enumsB!PriceExtensionPriceQualifierProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�(
0google/ads/googleads/v16/common/extensions.protogoogle.ads.googleads.v16.common1google/ads/googleads/v16/common/feed_common.proto.google/ads/googleads/v16/enums/app_store.protoDgoogle/ads/googleads/v16/enums/call_conversion_reporting_state.protoDgoogle/ads/googleads/v16/enums/price_extension_price_qualifier.proto?google/ads/googleads/v16/enums/price_extension_price_unit.proto9google/ads/googleads/v16/enums/price_extension_type.protoJgoogle/ads/googleads/v16/enums/promotion_extension_discount_modifier.protoAgoogle/ads/googleads/v16/enums/promotion_extension_occasion.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AppFeedItem
	link_text	 (	H �
app_id
 (	H�H
	app_store (25.google.ads.googleads.v16.enums.AppStoreEnum.AppStore

final_urls (	
final_mobile_urls (	"
tracking_url_template (	H�O
url_custom_parameters (20.google.ads.googleads.v16.common.CustomParameter
final_url_suffix (	H�B

_link_textB	
_app_idB
_tracking_url_templateB
_final_url_suffix"�
CallFeedItem
phone_number (	H �
country_code (	H�"
call_tracking_enabled	 (H�#
call_conversion_action
 (	H�.
!call_conversion_tracking_disabled (H��
call_conversion_reporting_state (2].google.ads.googleads.v16.enums.CallConversionReportingStateEnum.CallConversionReportingStateB
_phone_numberB
_country_codeB
_call_tracking_enabledB
_call_conversion_actionB$
"_call_conversion_tracking_disabled"=
CalloutFeedItem
callout_text (	H �B
_callout_text"�
LocationFeedItem
business_name	 (	H �
address_line_1
 (	H�
address_line_2 (	H�
city (	H�
province (	H�
postal_code (	H�
country_code (	H�
phone_number (	H�B
_business_nameB
_address_line_1B
_address_line_2B
_cityB
	_provinceB
_postal_codeB
_country_codeB
_phone_number"�
AffiliateLocationFeedItem
business_name (	H �
address_line_1 (	H�
address_line_2 (	H�
city (	H�
province (	H�
postal_code (	H�
country_code (	H�
phone_number (	H�
chain_id (H�

chain_name (	H	�B
_business_nameB
_address_line_1B
_address_line_2B
_cityB
	_provinceB
_postal_codeB
_country_codeB
_phone_numberB
	_chain_idB
_chain_name"�
TextMessageFeedItem
business_name (	H �
country_code (	H�
phone_number (	H�
text	 (	H�
extension_text
 (	H�B
_business_nameB
_country_codeB
_phone_numberB
_textB
_extension_text"�
PriceFeedItemW
type (2I.google.ads.googleads.v16.enums.PriceExtensionTypeEnum.PriceExtensionTypev
price_qualifier (2].google.ads.googleads.v16.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier"
tracking_url_template (	H �
language_code (	H�D
price_offerings (2+.google.ads.googleads.v16.common.PriceOffer
final_url_suffix	 (	H�B
_tracking_url_templateB
_language_codeB
_final_url_suffix"�

PriceOffer
header (	H �
description (	H�5
price (2&.google.ads.googleads.v16.common.Moneya
unit (2S.google.ads.googleads.v16.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit

final_urls	 (	
final_mobile_urls
 (	B	
_headerB
_description"�
PromotionFeedItem
promotion_target (	H��
discount_modifier (2i.google.ads.googleads.v16.enums.PromotionExtensionDiscountModifierEnum.PromotionExtensionDiscountModifier!
promotion_start_date (	H�
promotion_end_date (	H�k
occasion	 (2Y.google.ads.googleads.v16.enums.PromotionExtensionOccasionEnum.PromotionExtensionOccasion

final_urls (	
final_mobile_urls (	"
tracking_url_template (	H�O
url_custom_parameters (20.google.ads.googleads.v16.common.CustomParameter
final_url_suffix (	H�
language_code (	H�
percent_off (H B
money_amount_off (2&.google.ads.googleads.v16.common.MoneyH 
promotion_code (	HD
orders_over_amount (2&.google.ads.googleads.v16.common.MoneyHB
discount_typeB
promotion_triggerB
_promotion_targetB
_promotion_start_dateB
_promotion_end_dateB
_tracking_url_templateB
_final_url_suffixB
_language_code"K
StructuredSnippetFeedItem
header (	H �
values (	B	
_header"�
SitelinkFeedItem
	link_text	 (	H �
line1
 (	H�
line2 (	H�

final_urls (	
final_mobile_urls (	"
tracking_url_template (	H�O
url_custom_parameters (20.google.ads.googleads.v16.common.CustomParameter
final_url_suffix (	H�B

_link_textB
_line1B
_line2B
_tracking_url_templateB
_final_url_suffix"`
HotelCalloutFeedItem
text (	H �
language_code (	H�B
_textB
_language_code"L
ImageFeedItem;
image_asset (	B&�A�A 
googleads.googleapis.com/AssetB�
#com.google.ads.googleads.v16.commonBExtensionsProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
<google/ads/googleads/v16/enums/feed_item_target_device.protogoogle.ads.googleads.v16.enums"\\
FeedItemTargetDeviceEnum"@
FeedItemTargetDevice
UNSPECIFIED 
UNKNOWN

MOBILEB�
"com.google.ads.googleads.v16.enumsBFeedItemTargetDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/enums/listing_group_type.protogoogle.ads.googleads.v16.enums"c
ListingGroupTypeEnum"K
ListingGroupType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNITB�
"com.google.ads.googleads.v16.enumsBListingGroupTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�X
.google/ads/googleads/v16/common/criteria.protogoogle.ads.googleads.v16.common;google/ads/googleads/v16/enums/app_payment_model_type.proto7google/ads/googleads/v16/enums/content_label_type.proto0google/ads/googleads/v16/enums/day_of_week.proto+google/ads/googleads/v16/enums/device.proto0google/ads/googleads/v16/enums/gender_type.proto>google/ads/googleads/v16/enums/hotel_date_selection_type.proto6google/ads/googleads/v16/enums/income_range_type.proto5google/ads/googleads/v16/enums/interaction_type.proto7google/ads/googleads/v16/enums/keyword_match_type.proto7google/ads/googleads/v16/enums/listing_group_type.proto@google/ads/googleads/v16/enums/location_group_radius_units.proto3google/ads/googleads/v16/enums/minute_of_hour.proto9google/ads/googleads/v16/enums/parental_status_type.proto;google/ads/googleads/v16/enums/product_category_level.proto4google/ads/googleads/v16/enums/product_channel.proto@google/ads/googleads/v16/enums/product_channel_exclusivity.proto6google/ads/googleads/v16/enums/product_condition.protoCgoogle/ads/googleads/v16/enums/product_custom_attribute_index.proto7google/ads/googleads/v16/enums/product_type_level.proto;google/ads/googleads/v16/enums/proximity_radius_units.proto>google/ads/googleads/v16/enums/webpage_condition_operand.proto?google/ads/googleads/v16/enums/webpage_condition_operator.protogoogle/api/resource.proto"�
KeywordInfo
text (	H �Y

match_type (2E.google.ads.googleads.v16.enums.KeywordMatchTypeEnum.KeywordMatchTypeB
_text")
PlacementInfo
url (	H �B
_url"A
NegativeKeywordListInfo

shared_set (	H �B
_shared_set"�
MobileAppCategoryInfob
mobile_app_category_constant (	B7�A4
2googleads.googleapis.com/MobileAppCategoryConstantH �B
_mobile_app_category_constant"S
MobileApplicationInfo
app_id (	H �
name (	H�B	
_app_idB
_name"H
LocationInfo 
geo_target_constant (	H �B
_geo_target_constant"M

DeviceInfo?
type (21.google.ads.googleads.v16.enums.DeviceEnum.Device"�
ListingGroupInfoS
type (2E.google.ads.googleads.v16.enums.ListingGroupTypeEnum.ListingGroupTypeI

case_value (25.google.ads.googleads.v16.common.ListingDimensionInfo&
parent_ad_group_criterion (	H �H
path (25.google.ads.googleads.v16.common.ListingDimensionPathH�B
_parent_ad_group_criterionB
_path"a
ListingDimensionPathI

dimensions (25.google.ads.googleads.v16.common.ListingDimensionInfo"]
ListingScopeInfoI

dimensions (25.google.ads.googleads.v16.common.ListingDimensionInfo"�
ListingDimensionInfo@
hotel_id (2,.google.ads.googleads.v16.common.HotelIdInfoH F
hotel_class (2/.google.ads.googleads.v16.common.HotelClassInfoH W
hotel_country_region (27.google.ads.googleads.v16.common.HotelCountryRegionInfoH F
hotel_state (2/.google.ads.googleads.v16.common.HotelStateInfoH D

hotel_city (2..google.ads.googleads.v16.common.HotelCityInfoH P
product_category (24.google.ads.googleads.v16.common.ProductCategoryInfoH J
product_brand (21.google.ads.googleads.v16.common.ProductBrandInfoH N
product_channel (23.google.ads.googleads.v16.common.ProductChannelInfoH e
product_channel_exclusivity	 (2>.google.ads.googleads.v16.common.ProductChannelExclusivityInfoH R
product_condition
 (25.google.ads.googleads.v16.common.ProductConditionInfoH _
product_custom_attribute (2;.google.ads.googleads.v16.common.ProductCustomAttributeInfoH M
product_item_id (22.google.ads.googleads.v16.common.ProductItemIdInfoH H
product_type (20.google.ads.googleads.v16.common.ProductTypeInfoH P
product_grouping (24.google.ads.googleads.v16.common.ProductGroupingInfoH L
product_labels (22.google.ads.googleads.v16.common.ProductLabelsInfoH _
product_legacy_condition (2;.google.ads.googleads.v16.common.ProductLegacyConditionInfoH Q
product_type_full (24.google.ads.googleads.v16.common.ProductTypeFullInfoH F
activity_id (2/.google.ads.googleads.v16.common.ActivityIdInfoH N
activity_rating (23.google.ads.googleads.v16.common.ActivityRatingInfoH P
activity_country (24.google.ads.googleads.v16.common.ActivityCountryInfoH L
activity_state (22.google.ads.googleads.v16.common.ActivityStateInfoH J
activity_city (21.google.ads.googleads.v16.common.ActivityCityInfoH a
unknown_listing_dimension (2<.google.ads.googleads.v16.common.UnknownListingDimensionInfoH B
	dimension"+
HotelIdInfo
value (	H �B
_value".
HotelClassInfo
value (H �B
_value"\\
HotelCountryRegionInfo%
country_region_criterion (	H �B
_country_region_criterion"B
HotelStateInfo
state_criterion (	H �B
_state_criterion"?
HotelCityInfo
city_criterion (	H �B
_city_criterion"�
ProductCategoryInfo
category_id (H �\\
level (2M.google.ads.googleads.v16.enums.ProductCategoryLevelEnum.ProductCategoryLevelB
_category_id"0
ProductBrandInfo
value (	H �B
_value"h
ProductChannelInfoR
channel (2A.google.ads.googleads.v16.enums.ProductChannelEnum.ProductChannel"�
ProductChannelExclusivityInfot
channel_exclusivity (2W.google.ads.googleads.v16.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity"p
ProductConditionInfoX
	condition (2E.google.ads.googleads.v16.enums.ProductConditionEnum.ProductCondition"�
ProductCustomAttributeInfo
value (	H �j
index (2[.google.ads.googleads.v16.enums.ProductCustomAttributeIndexEnum.ProductCustomAttributeIndexB
_value"1
ProductItemIdInfo
value (	H �B
_value"�
ProductTypeInfo
value (	H �T
level (2E.google.ads.googleads.v16.enums.ProductTypeLevelEnum.ProductTypeLevelB
_value"3
ProductGroupingInfo
value (	H �B
_value"1
ProductLabelsInfo
value (	H �B
_value":
ProductLegacyConditionInfo
value (	H �B
_value"3
ProductTypeFullInfo
value (	H �B
_value"
UnknownListingDimensionInfo"}
HotelDateSelectionTypeInfo_
type (2Q.google.ads.googleads.v16.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType"g
HotelAdvanceBookingWindowInfo
min_days (H �
max_days (H�B
	_min_daysB
	_max_days"g
HotelLengthOfStayInfo

min_nights (H �

max_nights (H�B
_min_nightsB
_max_nights"A
HotelCheckInDateRangeInfo

start_date (	
end_date (	"c
HotelCheckInDayInfoL
day_of_week (27.google.ads.googleads.v16.enums.DayOfWeekEnum.DayOfWeek".
ActivityIdInfo
value (	H �B
_value"2
ActivityRatingInfo
value (H �B
_value"3
ActivityCountryInfo
value (	H �B
_value"1
ActivityStateInfo
value (	H �B
_value"0
ActivityCityInfo
value (	H �B
_value"h
InteractionTypeInfoQ
type (2C.google.ads.googleads.v16.enums.InteractionTypeEnum.InteractionType"�
AdScheduleInfoS
start_minute (2=.google.ads.googleads.v16.enums.MinuteOfHourEnum.MinuteOfHourQ

end_minute (2=.google.ads.googleads.v16.enums.MinuteOfHourEnum.MinuteOfHour

start_hour (H �
end_hour (H�L
day_of_week (27.google.ads.googleads.v16.enums.DayOfWeekEnum.DayOfWeekB
_start_hourB
	_end_hour"[
AgeRangeInfoK
type (2=.google.ads.googleads.v16.enums.AgeRangeTypeEnum.AgeRangeType"U

GenderInfoG
type (29.google.ads.googleads.v16.enums.GenderTypeEnum.GenderType"d
IncomeRangeInfoQ
type (2C.google.ads.googleads.v16.enums.IncomeRangeTypeEnum.IncomeRangeType"m
ParentalStatusInfoW
type (2I.google.ads.googleads.v16.enums.ParentalStatusTypeEnum.ParentalStatusType"6
YouTubeVideoInfo
video_id (	H �B
	_video_id"<
YouTubeChannelInfo

channel_id (	H �B
_channel_id"4
UserListInfo
	user_list (	H �B

_user_list"�
ProximityInfo@
	geo_point (2-.google.ads.googleads.v16.common.GeoPointInfo
radius (H �c
radius_units (2M.google.ads.googleads.v16.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits=
address (2,.google.ads.googleads.v16.common.AddressInfoB	
_radius"�
GeoPointInfo\'
longitude_in_micro_degrees (H �&
latitude_in_micro_degrees (H�B
_longitude_in_micro_degreesB
_latitude_in_micro_degrees"�
AddressInfo
postal_code (	H �
province_code	 (	H�
country_code
 (	H�
province_name (	H�
street_address (	H�
street_address2 (	H�
	city_name (	H�B
_postal_codeB
_province_codeB
_country_codeB
_province_nameB
_street_addressB
_street_address2B

_city_name"v
	TopicInfoH
topic_constant (	B+�A(
&googleads.googleapis.com/TopicConstantH �
path (	B
_topic_constant"D
LanguageInfo
language_constant (	H �B
_language_constant"5
IpBlockInfo

ip_address (	H �B
_ip_address"g
ContentLabelInfoS
type (2E.google.ads.googleads.v16.enums.ContentLabelTypeEnum.ContentLabelType"p
CarrierInfoL
carrier_constant (	B-�A*
(googleads.googleapis.com/CarrierConstantH �B
_carrier_constant"R
UserInterestInfo#
user_interest_category (	H �B
_user_interest_category"�
WebpageInfo
criterion_name (	H �I

conditions (25.google.ads.googleads.v16.common.WebpageConditionInfo
coverage_percentage (B
sample (22.google.ads.googleads.v16.common.WebpageSampleInfoB
_criterion_name"�
WebpageConditionInfod
operand (2S.google.ads.googleads.v16.enums.WebpageConditionOperandEnum.WebpageConditionOperandg
operator (2U.google.ads.googleads.v16.enums.WebpageConditionOperatorEnum.WebpageConditionOperator
argument (	H �B
	_argument"(
WebpageSampleInfo
sample_urls (	"�
OperatingSystemVersionInfol
!operating_system_version_constant (	B<�A9
7googleads.googleapis.com/OperatingSystemVersionConstantH �B$
"_operating_system_version_constant"p
AppPaymentModelInfoY
type (2K.google.ads.googleads.v16.enums.AppPaymentModelTypeEnum.AppPaymentModelType"�
MobileDeviceInfoW
mobile_device_constant (	B2�A/
-googleads.googleapis.com/MobileDeviceConstantH �B
_mobile_device_constant"F
CustomAffinityInfo
custom_affinity (	H �B
_custom_affinity"@
CustomIntentInfo
custom_intent (	H �B
_custom_intent"�
LocationGroupInfo
feed (	H �
geo_target_constants (	
radius (H�k
radius_units (2U.google.ads.googleads.v16.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits
feed_item_sets (	5
(enable_customer_level_location_asset_set	 (H�!
location_group_asset_sets
 (	B
_feedB	
_radiusB+
)_enable_customer_level_location_asset_set"-
CustomAudienceInfo
custom_audience (	"a
CombinedAudienceInfoI
combined_audience (	B.�A+
)googleads.googleapis.com/CombinedAudience" 
AudienceInfo
audience (	"�
KeywordThemeInfoT
keyword_theme_constant (	B2�A/
-googleads.googleapis.com/KeywordThemeConstantH !
free_form_keyword_theme (	H B
keyword_theme"(
LocalServiceIdInfo

service_id (	"
SearchThemeInfo
text (	"1
	BrandInfo
	entity_id (	H �B

_entity_id"7
BrandListInfo

shared_set (	H �B
_shared_setB�
#com.google.ads.googleads.v16.commonBCriteriaProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
<google/ads/googleads/v16/resources/extension_feed_item.proto"google.ads.googleads.v16.resources0google/ads/googleads/v16/common/extensions.proto3google/ads/googleads/v16/enums/extension_type.proto5google/ads/googleads/v16/enums/feed_item_status.proto<google/ads/googleads/v16/enums/feed_item_target_device.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
ExtensionFeedItemI
resource_name (	B2�A�A,
*googleads.googleapis.com/ExtensionFeedItem
id (B�AH�\\
extension_type (2?.google.ads.googleads.v16.enums.ExtensionTypeEnum.ExtensionTypeB�A
start_date_time (	H�
end_date_time (	H�E
ad_schedules (2/.google.ads.googleads.v16.common.AdScheduleInfo]
device (2M.google.ads.googleads.v16.enums.FeedItemTargetDeviceEnum.FeedItemTargetDeviceZ
targeted_geo_target_constant (	B/�A,
*googleads.googleapis.com/GeoTargetConstantH�F
targeted_keyword (2,.google.ads.googleads.v16.common.KeywordInfoV
status (2A.google.ads.googleads.v16.enums.FeedItemStatusEnum.FeedItemStatusB�AO
sitelink_feed_item (21.google.ads.googleads.v16.common.SitelinkFeedItemH b
structured_snippet_feed_item (2:.google.ads.googleads.v16.common.StructuredSnippetFeedItemH E
app_feed_item (2,.google.ads.googleads.v16.common.AppFeedItemH G
call_feed_item (2-.google.ads.googleads.v16.common.CallFeedItemH M
callout_feed_item	 (20.google.ads.googleads.v16.common.CalloutFeedItemH V
text_message_feed_item
 (24.google.ads.googleads.v16.common.TextMessageFeedItemH I
price_feed_item (2..google.ads.googleads.v16.common.PriceFeedItemH Q
promotion_feed_item (22.google.ads.googleads.v16.common.PromotionFeedItemH T
location_feed_item (21.google.ads.googleads.v16.common.LocationFeedItemB�AH g
affiliate_location_feed_item (2:.google.ads.googleads.v16.common.AffiliateLocationFeedItemB�AH X
hotel_callout_feed_item (25.google.ads.googleads.v16.common.HotelCalloutFeedItemH N
image_feed_item (2..google.ads.googleads.v16.common.ImageFeedItemB�AH C
targeted_campaign (	B&�A#
!googleads.googleapis.com/CampaignHB
targeted_ad_group (	B%�A"
 googleads.googleapis.com/AdGroupH:j�Ag
*googleads.googleapis.com/ExtensionFeedItem9customers/{customer_id}/extensionFeedItems/{feed_item_id}B
	extensionB
serving_resource_targetingB
_idB
_start_date_timeB
_end_date_timeB
_targeted_geo_target_constantB�
&com.google.ads.googleads.v16.resourcesBExtensionFeedItemProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

