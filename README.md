# Groupdocs Viewer for Java
============================

GroupDocs Viewer for Java plugin for ezPublish

With GroupDocs Viewer for Java plugin for ezPublish you can easily view on [annotate on PDF's](http://groupdocs.com/apps/Viewer), Word documents, Excel documents, Powerpoint documents and more with the GroupDocs Viewer tool, directly from within your ezPublish website.

###Plugin Manual Installation Instructions:
1. "groupdocsViewerJava" module contain "design, modules, setting", so unzip it into "extentions" directory, so parent directory is "groupdocsViewer"
2. Open file: "site/settings/override/site.ini.append.php" and add "ActiveExtensions[]=groupdocsViewerJava" under "[ExtensionSettings]"
3. Go to Admin > Setup > Extentions and checkbox where "groupdocsViewer" must be ticked
4. Then go to - Setup > Extentions and press "Regenerate autoloaded arrays for extentions" in the bottom
5. Grant permissions in admin go to - User Accounts > Roles and policies > Anonymous => Edit Role and if "groupdocsViewerJava" isn't available in the list press - New Policy > choose Module: groupdocsViewerJava > Grant access to all functions > Save
6. Go to Setup and press "Clear all caches"


###[Sign, Manage, Annotate, Assemble, Compare and Convert Documents with GroupDocs](http://groupdocs.com)
* [View PDF, Word, Excel, Powerpoint and Images with GroupDocs.Viewer for Java Library](http://groupdocs.com/java/document-viewer-library)
* [See GroupDocs Viewer for Java plugin for ez Publish CMS](https://github.com/groupdocs/ezpublish-groupdocs-viewer-java)

###Created by [GroupDocs Marketplace Team](http://groupdocs.com/marketplace/).