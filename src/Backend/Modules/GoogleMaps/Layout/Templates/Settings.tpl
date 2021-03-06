{include:{$BACKEND_CORE_PATH}/Layout/Templates/Head.tpl}
{include:{$BACKEND_CORE_PATH}/Layout/Templates/StructureStartModule.tpl}

<div class="pageTitle">
    <h2>{$lblModuleSettings|ucfirst}: {$lblGoogleMaps}</h2>
</div>

{form:settings}
    <div class="box">
        <div class="horizontal">
            <div class="heading">
                <h3>{$lblGoogleMaps}</h3>
            </div>
            <div class="options">
                <label for="address">{$lblAddress|ucfirst}<abbr title="{$lblRequiredField|ucfirst}">*</abbr></label>
                {$txtAddress} {$txtAddressError}
                <span class="helpTxt">{$msgHelpAddress}</span>
            </div>
        </div>
    </div>

    <div class="fullwidthOptions">
        <div class="buttonHolderRight">
            <input id="save" class="inputButton button mainButton" type="submit" name="save" value="{$lblSave|ucfirst}" />
        </div>
    </div>
{/form:settings}

{include:{$BACKEND_CORE_PATH}/Layout/Templates/StructureEndModule.tpl}
{include:{$BACKEND_CORE_PATH}/Layout/Templates/Footer.tpl}
